<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $OpenProactiveInsights
 * @property int|null $OpenReactiveInsights
 */
class ServiceInsightHealth extends Shape
{
    /**
     * @param array{
     *     OpenProactiveInsights?: int|null,
     *     OpenReactiveInsights?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
