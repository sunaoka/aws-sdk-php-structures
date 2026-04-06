<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CanaryCodeInput $Code
 * @property string $ArtifactS3Location
 * @property string $ExecutionRoleArn
 * @property Shapes\CanaryScheduleInput $Schedule
 * @property Shapes\CanaryRunConfigInput|null $RunConfig
 * @property int<1, 1024>|null $SuccessRetentionPeriodInDays
 * @property int<1, 1024>|null $FailureRetentionPeriodInDays
 * @property string $RuntimeVersion
 * @property Shapes\VpcConfigInput|null $VpcConfig
 * @property list<'lambda-function'>|null $ResourcesToReplicateTags
 * @property 'AUTOMATIC'|'OFF'|null $ProvisionedResourceCleanup
 * @property list<Shapes\BrowserConfig>|null $BrowserConfigs
 * @property array<string, string>|null $Tags
 * @property Shapes\ArtifactConfigInput|null $ArtifactConfig
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
     *     RunConfig?: Shapes\CanaryRunConfigInput|null,
     *     SuccessRetentionPeriodInDays?: int<1, 1024>|null,
     *     FailureRetentionPeriodInDays?: int<1, 1024>|null,
     *     RuntimeVersion: string,
     *     VpcConfig?: Shapes\VpcConfigInput|null,
     *     ResourcesToReplicateTags?: list<'lambda-function'>|null,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF'|null,
     *     BrowserConfigs?: list<Shapes\BrowserConfig>|null,
     *     Tags?: array<string, string>|null,
     *     ArtifactConfig?: Shapes\ArtifactConfigInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
