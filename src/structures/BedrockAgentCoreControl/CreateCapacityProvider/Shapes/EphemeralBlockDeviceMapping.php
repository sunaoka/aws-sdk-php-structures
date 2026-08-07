<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property string|null $virtualName
 * @property EphemeralEBSVolumeConfiguration|null $ebs
 */
class EphemeralBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     virtualName?: string|null,
     *     ebs?: EphemeralEBSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
