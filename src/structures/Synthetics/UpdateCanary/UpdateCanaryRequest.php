<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CanaryCodeInput|null $Code
 * @property string|null $ExecutionRoleArn
 * @property string|null $RuntimeVersion
 * @property Shapes\CanaryScheduleInput|null $Schedule
 * @property Shapes\CanaryRunConfigInput|null $RunConfig
 * @property int<1, 1024>|null $SuccessRetentionPeriodInDays
 * @property int<1, 1024>|null $FailureRetentionPeriodInDays
 * @property Shapes\VpcConfigInput|null $VpcConfig
 * @property Shapes\VisualReferenceInput|null $VisualReference
 * @property string|null $ArtifactS3Location
 * @property Shapes\ArtifactConfigInput|null $ArtifactConfig
 * @property 'AUTOMATIC'|'OFF'|null $ProvisionedResourceCleanup
 * @property string|null $DryRunId
 */
class UpdateCanaryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Code?: Shapes\CanaryCodeInput|null,
     *     ExecutionRoleArn?: string|null,
     *     RuntimeVersion?: string|null,
     *     Schedule?: Shapes\CanaryScheduleInput|null,
     *     RunConfig?: Shapes\CanaryRunConfigInput|null,
     *     SuccessRetentionPeriodInDays?: int<1, 1024>|null,
     *     FailureRetentionPeriodInDays?: int<1, 1024>|null,
     *     VpcConfig?: Shapes\VpcConfigInput|null,
     *     VisualReference?: Shapes\VisualReferenceInput|null,
     *     ArtifactS3Location?: string|null,
     *     ArtifactConfig?: Shapes\ArtifactConfigInput|null,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF'|null,
     *     DryRunId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
