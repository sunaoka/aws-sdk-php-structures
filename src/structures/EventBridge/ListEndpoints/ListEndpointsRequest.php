<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $HomeRegion
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListEndpointsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     HomeRegion?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
