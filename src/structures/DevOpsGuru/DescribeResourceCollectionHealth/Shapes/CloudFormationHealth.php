<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackName
 * @property InsightHealth $Insight
 * @property int $AnalyzedResourceCount
 */
class CloudFormationHealth extends Shape
{
    /**
     * @param array{
     *     StackName?: string,
     *     Insight?: InsightHealth,
     *     AnalyzedResourceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
