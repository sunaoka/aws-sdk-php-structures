<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastLaunchImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageId
 * @property 'snapshot'|null $ResourceType
 * @property FastLaunchSnapshotConfigurationResponse|null $SnapshotConfiguration
 * @property FastLaunchLaunchTemplateSpecificationResponse|null $LaunchTemplate
 * @property int|null $MaxParallelLaunches
 * @property string|null $OwnerId
 * @property 'enabling'|'enabling-failed'|'enabled'|'enabled-failed'|'disabling'|'disabling-failed'|null $State
 * @property string|null $StateTransitionReason
 * @property \Aws\Api\DateTimeResult|null $StateTransitionTime
 */
class DescribeFastLaunchImagesSuccessItem extends Shape
{
    /**
     * @param array{
     *     ImageId?: string|null,
     *     ResourceType?: 'snapshot'|null,
     *     SnapshotConfiguration?: FastLaunchSnapshotConfigurationResponse|null,
     *     LaunchTemplate?: FastLaunchLaunchTemplateSpecificationResponse|null,
     *     MaxParallelLaunches?: int|null,
     *     OwnerId?: string|null,
     *     State?: 'enabling'|'enabling-failed'|'enabled'|'enabled-failed'|'disabling'|'disabling-failed'|null,
     *     StateTransitionReason?: string|null,
     *     StateTransitionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
