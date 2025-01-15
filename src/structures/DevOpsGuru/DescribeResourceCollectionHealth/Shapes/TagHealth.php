<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppBoundaryKey
 * @property string|null $TagValue
 * @property InsightHealth|null $Insight
 * @property int|null $AnalyzedResourceCount
 */
class TagHealth extends Shape
{
    /**
     * @param array{
     *     AppBoundaryKey?: string|null,
     *     TagValue?: string|null,
     *     Insight?: InsightHealth|null,
     *     AnalyzedResourceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
