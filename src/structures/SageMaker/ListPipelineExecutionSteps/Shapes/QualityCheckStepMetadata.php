<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CheckType
 * @property string|null $BaselineUsedForDriftCheckStatistics
 * @property string|null $BaselineUsedForDriftCheckConstraints
 * @property string|null $CalculatedBaselineStatistics
 * @property string|null $CalculatedBaselineConstraints
 * @property string|null $ModelPackageGroupName
 * @property string|null $ViolationReport
 * @property string|null $CheckJobArn
 * @property bool|null $SkipCheck
 * @property bool|null $RegisterNewBaseline
 */
class QualityCheckStepMetadata extends Shape
{
    /**
     * @param array{
     *     CheckType?: string|null,
     *     BaselineUsedForDriftCheckStatistics?: string|null,
     *     BaselineUsedForDriftCheckConstraints?: string|null,
     *     CalculatedBaselineStatistics?: string|null,
     *     CalculatedBaselineConstraints?: string|null,
     *     ModelPackageGroupName?: string|null,
     *     ViolationReport?: string|null,
     *     CheckJobArn?: string|null,
     *     SkipCheck?: bool|null,
     *     RegisterNewBaseline?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
