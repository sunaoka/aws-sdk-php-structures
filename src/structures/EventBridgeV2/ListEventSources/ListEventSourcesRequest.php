<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListEventSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventBusArn
 * @property string|null $NamePrefix
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListEventSourcesRequest extends Request
{
    /**
     * @param array{
     *     EventBusArn?: string|null,
     *     NamePrefix?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
