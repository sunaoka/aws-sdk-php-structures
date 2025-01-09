<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CheckType
 * @property string $BaselineUsedForDriftCheckConstraints
 * @property string $CalculatedBaselineConstraints
 * @property string $ModelPackageGroupName
 * @property string $ViolationReport
 * @property string $CheckJobArn
 * @property bool $SkipCheck
 * @property bool $RegisterNewBaseline
 */
class ClarifyCheckStepMetadata extends Shape
{
    /**
     * @param array{
     *     CheckType?: string,
     *     BaselineUsedForDriftCheckConstraints?: string,
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
