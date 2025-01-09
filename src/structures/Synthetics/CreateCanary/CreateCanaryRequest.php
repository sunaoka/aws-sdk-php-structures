<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CanaryCodeInput $Code
 * @property string $ArtifactS3Location
 * @property string $ExecutionRoleArn
 * @property Shapes\CanaryScheduleInput $Schedule
 * @property Shapes\CanaryRunConfigInput $RunConfig
 * @property int $SuccessRetentionPeriodInDays
 * @property int $FailureRetentionPeriodInDays
 * @property string $RuntimeVersion
 * @property Shapes\VpcConfigInput $VpcConfig
 * @property list<'lambda-function'> $ResourcesToReplicateTags
 * @property 'AUTOMATIC'|'OFF' $ProvisionedResourceCleanup
 * @property array<string, string> $Tags
 * @property Shapes\ArtifactConfigInput $ArtifactConfig
 */
class CreateCanaryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Code: Shapes\CanaryCodeInput,
     *     ArtifactS3Location: string,
     *     ExecutionRoleArn: string,
     *     Schedule: Shapes\CanaryScheduleInput,
     *     RunConfig?: Shapes\CanaryRunConfigInput,
     *     SuccessRetentionPeriodInDays?: int,
     *     FailureRetentionPeriodInDays?: int,
     *     RuntimeVersion: string,
     *     VpcConfig?: Shapes\VpcConfigInput,
     *     ResourcesToReplicateTags?: list<'lambda-function'>,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF',
     *     Tags?: array<string, string>,
     *     ArtifactConfig?: Shapes\ArtifactConfigInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
