<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolumeConfiguration|null $ebsConfiguration
 */
class VolumeConfiguration extends Shape
{
    /**
     * @param array{ebsConfiguration?: EbsVolumeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
