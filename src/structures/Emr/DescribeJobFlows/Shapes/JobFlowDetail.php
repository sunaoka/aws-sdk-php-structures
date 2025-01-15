<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobFlowId
 * @property string $Name
 * @property string|null $LogUri
 * @property string|null $LogEncryptionKmsKeyId
 * @property string|null $AmiVersion
 * @property JobFlowExecutionStatusDetail $ExecutionStatusDetail
 * @property JobFlowInstancesDetail $Instances
 * @property list<StepDetail>|null $Steps
 * @property list<BootstrapActionDetail>|null $BootstrapActions
 * @property list<string>|null $SupportedProducts
 * @property bool|null $VisibleToAllUsers
 * @property string|null $JobFlowRole
 * @property string|null $ServiceRole
 * @property string|null $AutoScalingRole
 * @property 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'|null $ScaleDownBehavior
 */
class JobFlowDetail extends Shape
{
    /**
     * @param array{
     *     JobFlowId: string,
     *     Name: string,
     *     LogUri?: string|null,
     *     LogEncryptionKmsKeyId?: string|null,
     *     AmiVersion?: string|null,
     *     ExecutionStatusDetail: JobFlowExecutionStatusDetail,
     *     Instances: JobFlowInstancesDetail,
     *     Steps?: list<StepDetail>|null,
     *     BootstrapActions?: list<BootstrapActionDetail>|null,
     *     SupportedProducts?: list<string>|null,
     *     VisibleToAllUsers?: bool|null,
     *     JobFlowRole?: string|null,
     *     ServiceRole?: string|null,
     *     AutoScalingRole?: string|null,
     *     ScaleDownBehavior?: 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
