<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OpenProactiveInsights
 * @property int $OpenReactiveInsights
 */
class ServiceInsightHealth extends Shape
{
    /**
     * @param array{
     *     OpenProactiveInsights?: int,
     *     OpenReactiveInsights?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
