<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateSource $launchTemplateSource
 * @property VpcConfiguration $vpcConfiguration
 * @property list<VolumeConfiguration>|null $volumes
 * @property InstanceLifecycleConfiguration|null $lifecycleConfiguration
 * @property RootVolumeConfiguration|null $rootVolume
 */
class Ec2Configuration extends Shape
{
    /**
     * @param array{
     *     launchTemplateSource: LaunchTemplateSource,
     *     vpcConfiguration: VpcConfiguration,
     *     volumes?: list<VolumeConfiguration>|null,
     *     lifecycleConfiguration?: InstanceLifecycleConfiguration|null,
     *     rootVolume?: RootVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
