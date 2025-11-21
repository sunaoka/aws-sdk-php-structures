<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property HadoopStepConfig|null $Config
 * @property 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null $ActionOnFailure
 * @property StepStatus|null $Status
 * @property string|null $LogUri
 * @property string|null $EncryptionKeyArn
 */
class StepSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Config?: HadoopStepConfig|null,
     *     ActionOnFailure?: 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null,
     *     Status?: StepStatus|null,
     *     LogUri?: string|null,
     *     EncryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
