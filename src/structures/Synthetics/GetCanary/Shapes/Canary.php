<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property CanaryCodeOutput $Code
 * @property string $ExecutionRoleArn
 * @property CanaryScheduleOutput $Schedule
 * @property CanaryRunConfigOutput $RunConfig
 * @property int $SuccessRetentionPeriodInDays
 * @property int $FailureRetentionPeriodInDays
 * @property CanaryStatus $Status
 * @property CanaryTimeline $Timeline
 * @property string $ArtifactS3Location
 * @property string $EngineArn
 * @property string $RuntimeVersion
 * @property VpcConfigOutput $VpcConfig
 * @property VisualReferenceOutput $VisualReference
 * @property 'AUTOMATIC'|'OFF' $ProvisionedResourceCleanup
 * @property array<string, string> $Tags
 * @property ArtifactConfigOutput $ArtifactConfig
 */
class Canary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Code?: CanaryCodeOutput,
     *     ExecutionRoleArn?: string,
     *     Schedule?: CanaryScheduleOutput,
     *     RunConfig?: CanaryRunConfigOutput,
     *     SuccessRetentionPeriodInDays?: int,
     *     FailureRetentionPeriodInDays?: int,
     *     Status?: CanaryStatus,
     *     Timeline?: CanaryTimeline,
     *     ArtifactS3Location?: string,
     *     EngineArn?: string,
     *     RuntimeVersion?: string,
     *     VpcConfig?: VpcConfigOutput,
     *     VisualReference?: VisualReferenceOutput,
     *     ProvisionedResourceCleanup?: 'AUTOMATIC'|'OFF',
     *     Tags?: array<string, string>,
     *     ArtifactConfig?: ArtifactConfigOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
