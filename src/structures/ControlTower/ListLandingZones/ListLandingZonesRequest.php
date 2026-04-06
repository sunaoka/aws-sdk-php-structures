<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1>|null $maxResults
 * @property string|null $nextToken
 */
class ListLandingZonesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
