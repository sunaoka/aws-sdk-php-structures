<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FromUrlSynchronizationConfiguration|null $fromUrl
 */
class SynchronizationConfiguration extends Shape
{
    /**
     * @param array{fromUrl?: FromUrlSynchronizationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
