<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackName
 * @property InsightHealth|null $Insight
 * @property int|null $AnalyzedResourceCount
 */
class CloudFormationHealth extends Shape
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     Insight?: InsightHealth|null,
     *     AnalyzedResourceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
