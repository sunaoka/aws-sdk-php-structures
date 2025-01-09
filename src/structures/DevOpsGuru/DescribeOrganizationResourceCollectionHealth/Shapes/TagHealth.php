<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppBoundaryKey
 * @property string $TagValue
 * @property InsightHealth $Insight
 * @property int $AnalyzedResourceCount
 */
class TagHealth extends Shape
{
    /**
     * @param array{
     *     AppBoundaryKey?: string,
     *     TagValue?: string,
     *     Insight?: InsightHealth,
     *     AnalyzedResourceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
