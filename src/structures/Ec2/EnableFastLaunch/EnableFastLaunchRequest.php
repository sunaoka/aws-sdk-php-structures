<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string $ResourceType
 * @property Shapes\FastLaunchSnapshotConfigurationRequest $SnapshotConfiguration
 * @property Shapes\FastLaunchLaunchTemplateSpecificationRequest $LaunchTemplate
 * @property int $MaxParallelLaunches
 * @property bool $DryRun
 */
class EnableFastLaunchRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     ResourceType?: string,
     *     SnapshotConfiguration?: Shapes\FastLaunchSnapshotConfigurationRequest,
     *     LaunchTemplate?: Shapes\FastLaunchLaunchTemplateSpecificationRequest,
     *     MaxParallelLaunches?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
