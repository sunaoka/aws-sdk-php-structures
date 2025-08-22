<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property CanaryCodeOutput|null $Code
 * @property string|null $ExecutionRoleArn
 * @property CanaryScheduleOutput|null $Schedule
 * @property CanaryRunConfigOutput|null $RunConfig
 * @property int<1, 1024>|null $SuccessRetentionPeriodInDays
 * @property int<1, 1024>|null $FailureRetentionPeriodInDays
 * @property CanaryStatus|null $Status
 * @property CanaryTimeline|null $Timeline
 * @property string|null $ArtifactS3Location
 * @property string|null $EngineArn
 * @property string|null $RuntimeVersion
 * @property VpcConfigOutput|null $VpcConfig
 * @property VisualReferenceOutput|null $VisualReference
 * @property 'AUTOMATIC'|'OFF'|null $ProvisionedResourceCleanup
 * @property list<BrowserConfig>|null $BrowserConfigs
 * @property list<EngineConfig>|null $EngineConfigs
 * @property list<VisualReferenceOutput>|null $VisualReferences
 * @property array<string, string>|null $Tags
 * @property ArtifactConfigOutput|null $ArtifactConfig
 * @property DryRunConfigOutput|null $DryRunConfig
 */
class Canary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Code?: CanaryCodeOutput|null,
     *     ExecutionRoleArn?: string|null,
     *     Schedule?: CanaryScheduleOutput|null,
     *     RunConfig?: CanaryRunConfigOutput|null,
     *     SuccessRetentionPeriodInDays?: int<1, 1024>|null,
     *     FailureRetentionPeriodInDays?: int<1, 1024>|null,
     *     Status?: CanaryStatus|null,
     *     Timeline?: CanaryTimeline|null,
     *     ArtifactS3Location?: string|null,
     *     EngineArn?: string|null,
     *     RuntimeVersion?: string|null,
     *     VpcConfig?: VpcConfigOutput|null,
     *     VisualReference?: VisualReferenceOutput|null,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF'|null,
     *     BrowserConfigs?: list<BrowserConfig>|null,
     *     EngineConfigs?: list<EngineConfig>|null,
     *     VisualReferences?: list<VisualReferenceOutput>|null,
     *     Tags?: array<string, string>|null,
     *     ArtifactConfig?: ArtifactConfigOutput|null,
     *     DryRunConfig?: DryRunConfigOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
