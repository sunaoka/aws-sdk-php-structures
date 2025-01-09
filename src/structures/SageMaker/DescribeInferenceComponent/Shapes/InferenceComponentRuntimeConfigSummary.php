<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DesiredCopyCount
 * @property int<0, max> $CurrentCopyCount
 */
class InferenceComponentRuntimeConfigSummary extends Shape
{
    /**
     * @param array{
     *     DesiredCopyCount?: int<0, max>,
     *     CurrentCopyCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
