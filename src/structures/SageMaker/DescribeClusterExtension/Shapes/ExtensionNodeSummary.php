<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TotalCount
 * @property int<0, max> $ActiveCount
 */
class ExtensionNodeSummary extends Shape
{
    /**
     * @param array{
     *     TotalCount: int<0, max>,
     *     ActiveCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
