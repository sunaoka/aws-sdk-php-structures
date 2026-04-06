<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $satelliteId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListGroundStationsRequest extends Request
{
    /**
     * @param array{
     *     satelliteId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
