<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 1209600>|null $idleInstanceTimeout
 * @property int<60, 1209600>|null $maxLifetime
 */
class InstanceLifecycleConfiguration extends Shape
{
    /**
     * @param array{
     *     idleInstanceTimeout?: int<60, 1209600>|null,
     *     maxLifetime?: int<60, 1209600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
