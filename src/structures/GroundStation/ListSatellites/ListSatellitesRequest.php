<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListSatellites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 */
class ListSatellitesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
