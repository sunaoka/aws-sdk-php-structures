<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastLaunchImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageId
 * @property 'snapshot' $ResourceType
 * @property FastLaunchSnapshotConfigurationResponse $SnapshotConfiguration
 * @property FastLaunchLaunchTemplateSpecificationResponse $LaunchTemplate
 * @property int $MaxParallelLaunches
 * @property string $OwnerId
 * @property 'enabling'|'enabling-failed'|'enabled'|'enabled-failed'|'disabling'|'disabling-failed' $State
 * @property string $StateTransitionReason
 * @property \Aws\Api\DateTimeResult $StateTransitionTime
 */
class DescribeFastLaunchImagesSuccessItem extends Shape
{
    /**
     * @param array{
     *     ImageId?: string,
     *     ResourceType?: 'snapshot',
     *     SnapshotConfiguration?: FastLaunchSnapshotConfigurationResponse,
     *     LaunchTemplate?: FastLaunchLaunchTemplateSpecificationResponse,
     *     MaxParallelLaunches?: int,
     *     OwnerId?: string,
     *     State?: 'enabling'|'enabling-failed'|'enabled'|'enabled-failed'|'disabling'|'disabling-failed',
     *     StateTransitionReason?: string,
     *     StateTransitionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
