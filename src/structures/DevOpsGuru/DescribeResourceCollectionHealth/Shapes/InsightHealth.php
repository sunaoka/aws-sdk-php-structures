<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $OpenProactiveInsights
 * @property int|null $OpenReactiveInsights
 * @property int|null $MeanTimeToRecoverInMilliseconds
 */
class InsightHealth extends Shape
{
    /**
     * @param array{
     *     OpenProactiveInsights?: int|null,
     *     OpenReactiveInsights?: int|null,
     *     MeanTimeToRecoverInMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
