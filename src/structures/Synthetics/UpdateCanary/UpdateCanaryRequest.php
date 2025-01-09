<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CanaryCodeInput $Code
 * @property string $ExecutionRoleArn
 * @property string $RuntimeVersion
 * @property Shapes\CanaryScheduleInput $Schedule
 * @property Shapes\CanaryRunConfigInput $RunConfig
 * @property int<1, 1024> $SuccessRetentionPeriodInDays
 * @property int<1, 1024> $FailureRetentionPeriodInDays
 * @property Shapes\VpcConfigInput $VpcConfig
 * @property Shapes\VisualReferenceInput $VisualReference
 * @property string $ArtifactS3Location
 * @property Shapes\ArtifactConfigInput $ArtifactConfig
 * @property 'AUTOMATIC'|'OFF' $ProvisionedResourceCleanup
 */
class UpdateCanaryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Code?: Shapes\CanaryCodeInput,
     *     ExecutionRoleArn?: string,
     *     RuntimeVersion?: string,
     *     Schedule?: Shapes\CanaryScheduleInput,
     *     RunConfig?: Shapes\CanaryRunConfigInput,
     *     SuccessRetentionPeriodInDays?: int<1, 1024>,
     *     FailureRetentionPeriodInDays?: int<1, 1024>,
     *     VpcConfig?: Shapes\VpcConfigInput,
     *     VisualReference?: Shapes\VisualReferenceInput,
     *     ArtifactS3Location?: string,
     *     ArtifactConfig?: Shapes\ArtifactConfigInput,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
