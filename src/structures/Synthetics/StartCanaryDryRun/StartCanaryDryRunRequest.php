<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanaryDryRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CanaryCodeInput|null $Code
 * @property string|null $RuntimeVersion
 * @property Shapes\CanaryRunConfigInput|null $RunConfig
 * @property Shapes\VpcConfigInput|null $VpcConfig
 * @property string|null $ExecutionRoleArn
 * @property int<1, 1024>|null $SuccessRetentionPeriodInDays
 * @property int<1, 1024>|null $FailureRetentionPeriodInDays
 * @property Shapes\VisualReferenceInput|null $VisualReference
 * @property string|null $ArtifactS3Location
 * @property Shapes\ArtifactConfigInput|null $ArtifactConfig
 * @property 'AUTOMATIC'|'OFF'|null $ProvisionedResourceCleanup
 * @property list<Shapes\BrowserConfig>|null $BrowserConfigs
 * @property list<Shapes\VisualReferenceInput>|null $VisualReferences
 */
class StartCanaryDryRunRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Code?: Shapes\CanaryCodeInput|null,
     *     RuntimeVersion?: string|null,
     *     RunConfig?: Shapes\CanaryRunConfigInput|null,
     *     VpcConfig?: Shapes\VpcConfigInput|null,
     *     ExecutionRoleArn?: string|null,
     *     SuccessRetentionPeriodInDays?: int<1, 1024>|null,
     *     FailureRetentionPeriodInDays?: int<1, 1024>|null,
     *     VisualReference?: Shapes\VisualReferenceInput|null,
     *     ArtifactS3Location?: string|null,
     *     ArtifactConfig?: Shapes\ArtifactConfigInput|null,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF'|null,
     *     BrowserConfigs?: list<Shapes\BrowserConfig>|null,
     *     VisualReferences?: list<Shapes\VisualReferenceInput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
