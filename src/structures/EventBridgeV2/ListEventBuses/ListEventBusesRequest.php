<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListEventBuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property string|null $EventBusAccountId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListEventBusesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     EventBusAccountId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
