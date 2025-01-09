<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobFlowId
 * @property string $Name
 * @property string $LogUri
 * @property string $LogEncryptionKmsKeyId
 * @property string $AmiVersion
 * @property JobFlowExecutionStatusDetail $ExecutionStatusDetail
 * @property JobFlowInstancesDetail $Instances
 * @property list<StepDetail> $Steps
 * @property list<BootstrapActionDetail> $BootstrapActions
 * @property list<string> $SupportedProducts
 * @property bool $VisibleToAllUsers
 * @property string $JobFlowRole
 * @property string $ServiceRole
 * @property string $AutoScalingRole
 * @property 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION' $ScaleDownBehavior
 */
class JobFlowDetail extends Shape
{
    /**
     * @param array{
     *     JobFlowId: string,
     *     Name: string,
     *     LogUri?: string,
     *     LogEncryptionKmsKeyId?: string,
     *     AmiVersion?: string,
     *     ExecutionStatusDetail: JobFlowExecutionStatusDetail,
     *     Instances: JobFlowInstancesDetail,
     *     Steps?: list<StepDetail>,
     *     BootstrapActions?: list<BootstrapActionDetail>,
     *     SupportedProducts?: list<string>,
     *     VisibleToAllUsers?: bool,
     *     JobFlowRole?: string,
     *     ServiceRole?: string,
     *     AutoScalingRole?: string,
     *     ScaleDownBehavior?: 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
