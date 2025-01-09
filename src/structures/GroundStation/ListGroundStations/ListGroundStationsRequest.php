<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 * @property string $satelliteId
 */
class ListGroundStationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>,
     *     nextToken?: string,
     *     satelliteId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
