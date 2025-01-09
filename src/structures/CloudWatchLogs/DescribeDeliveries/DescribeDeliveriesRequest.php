<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $limit
 */
class DescribeDeliveriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
