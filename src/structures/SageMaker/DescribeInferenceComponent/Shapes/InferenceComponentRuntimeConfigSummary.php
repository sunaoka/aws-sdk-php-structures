<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DesiredCopyCount
 * @property int $CurrentCopyCount
 */
class InferenceComponentRuntimeConfigSummary extends Shape
{
    /**
     * @param array{
     *     DesiredCopyCount?: int,
     *     CurrentCopyCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
