<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string|null $ResourceType
 * @property Shapes\FastLaunchSnapshotConfigurationRequest|null $SnapshotConfiguration
 * @property Shapes\FastLaunchLaunchTemplateSpecificationRequest|null $LaunchTemplate
 * @property int|null $MaxParallelLaunches
 * @property bool|null $DryRun
 */
class EnableFastLaunchRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     ResourceType?: string|null,
     *     SnapshotConfiguration?: Shapes\FastLaunchSnapshotConfigurationRequest|null,
     *     LaunchTemplate?: Shapes\FastLaunchLaunchTemplateSpecificationRequest|null,
     *     MaxParallelLaunches?: int|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
