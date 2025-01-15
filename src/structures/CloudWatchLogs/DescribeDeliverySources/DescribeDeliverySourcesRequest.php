<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliverySources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class DescribeDeliverySourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
