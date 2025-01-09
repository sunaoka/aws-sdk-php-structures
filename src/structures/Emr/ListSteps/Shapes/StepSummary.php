<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property HadoopStepConfig $Config
 * @property 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE' $ActionOnFailure
 * @property StepStatus $Status
 */
class StepSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Config?: HadoopStepConfig,
     *     ActionOnFailure?: 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE',
     *     Status?: StepStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
