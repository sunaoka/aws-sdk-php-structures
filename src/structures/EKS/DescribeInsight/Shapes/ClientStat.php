<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userAgent
 * @property int|null $numberOfRequestsLast30Days
 * @property \Aws\Api\DateTimeResult|null $lastRequestTime
 */
class ClientStat extends Shape
{
    /**
     * @param array{
     *     userAgent?: string|null,
     *     numberOfRequestsLast30Days?: int|null,
     *     lastRequestTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
