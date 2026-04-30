<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $DesiredCopyCount
 * @property int<0, max>|null $CurrentCopyCount
 * @property list<InferenceComponentPlacementStatus>|null $PlacementStatus
 */
class InferenceComponentRuntimeConfigSummary extends Shape
{
    /**
     * @param array{
     *     DesiredCopyCount?: int<0, max>|null,
     *     CurrentCopyCount?: int<0, max>|null,
     *     PlacementStatus?: list<InferenceComponentPlacementStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
