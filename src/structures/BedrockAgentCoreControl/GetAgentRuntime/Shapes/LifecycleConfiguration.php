<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 28800>|null $idleRuntimeSessionTimeout
 * @property int<60, 28800>|null $maxLifetime
 */
class LifecycleConfiguration extends Shape
{
    /**
     * @param array{
     *     idleRuntimeSessionTimeout?: int<60, 28800>|null,
     *     maxLifetime?: int<60, 28800>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
