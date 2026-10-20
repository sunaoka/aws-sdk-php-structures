<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 * @property list<string>|null $deliverySourceNames
 */
class DescribeDeliveriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null,
     *     deliverySourceNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
