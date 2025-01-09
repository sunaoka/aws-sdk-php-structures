<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 * @property ApplicationSource $ApplicationSource
 * @property list<ScalingInstruction> $ScalingInstructions
 * @property 'Active'|'ActiveWithProblems'|'CreationInProgress'|'CreationFailed'|'DeletionInProgress'|'DeletionFailed'|'UpdateInProgress'|'UpdateFailed' $StatusCode
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $StatusStartTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class ScalingPlan extends Shape
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int,
     *     ApplicationSource: ApplicationSource,
     *     ScalingInstructions: list<ScalingInstruction>,
     *     StatusCode: 'Active'|'ActiveWithProblems'|'CreationInProgress'|'CreationFailed'|'DeletionInProgress'|'DeletionFailed'|'UpdateInProgress'|'UpdateFailed',
     *     StatusMessage?: string,
     *     StatusStartTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
