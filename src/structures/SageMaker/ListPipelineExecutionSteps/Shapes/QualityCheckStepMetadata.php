<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CheckType
 * @property string $BaselineUsedForDriftCheckStatistics
 * @property string $BaselineUsedForDriftCheckConstraints
 * @property string $CalculatedBaselineStatistics
 * @property string $CalculatedBaselineConstraints
 * @property string $ModelPackageGroupName
 * @property string $ViolationReport
 * @property string $CheckJobArn
 * @property bool $SkipCheck
 * @property bool $RegisterNewBaseline
 */
class QualityCheckStepMetadata extends Shape
{
    /**
     * @param array{
     *     CheckType?: string,
     *     BaselineUsedForDriftCheckStatistics?: string,
     *     BaselineUsedForDriftCheckConstraints?: string,
     *     CalculatedBaselineStatistics?: string,
     *     CalculatedBaselineConstraints?: string,
     *     ModelPackageGroupName?: string,
     *     ViolationReport?: string,
     *     CheckJobArn?: string,
     *     SkipCheck?: bool,
     *     RegisterNewBaseline?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
