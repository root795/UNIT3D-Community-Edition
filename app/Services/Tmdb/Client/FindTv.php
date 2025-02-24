<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace App\Services\Tmdb\Client;

class FindTv
{
    public const API_BASE_URI = 'https://api.TheMovieDB.org/3';
    public $data;

    public function __construct($query, $year)
    {
        $this->client = new \GuzzleHttp\Client(
            [
                'base_uri'    => self::API_BASE_URI,
                'verify'      => false,
                'http_errors' => false,
                'headers'     => [
                    'Content-Type' => 'application/json',
                    'Accept'       => 'application/json',
                ],
                // 'query' => [
                //     'api_key' => config('api-keys.tmdb'),
                //     'query' => $query,
                // ],
            ]
        );

        $response = $this->client->request('get', 'https://api.themoviedb.org/3/search/tv?api_key='.config('api-keys.tmdb').'&query='.$query.'&first_air_date_year='.$year);

        $this->data = json_decode($response->getBody()->getContents(), true);
    }

    public function index()
    {
        return $this->data;
    }

    public function get_homepage()
    {
        return $this->data['homepage'];
    }
}
