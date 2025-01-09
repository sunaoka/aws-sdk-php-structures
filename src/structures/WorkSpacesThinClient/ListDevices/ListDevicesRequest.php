<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
