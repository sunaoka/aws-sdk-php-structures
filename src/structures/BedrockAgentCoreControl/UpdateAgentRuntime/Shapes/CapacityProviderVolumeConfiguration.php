<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $volumeName
 * @property string $mountPath
 */
class CapacityProviderVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     volumeName: string,
     *     mountPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
