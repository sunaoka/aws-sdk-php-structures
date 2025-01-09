<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userAgent
 * @property int $numberOfRequestsLast30Days
 * @property \Aws\Api\DateTimeResult $lastRequestTime
 */
class ClientStat extends Shape
{
    /**
     * @param array{
     *     userAgent?: string,
     *     numberOfRequestsLast30Days?: int,
     *     lastRequestTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
