<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliverySources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 * @property list<string>|null $resourceArns
 */
class DescribeDeliverySourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null,
     *     resourceArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
