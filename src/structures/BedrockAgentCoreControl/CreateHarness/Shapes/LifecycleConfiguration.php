<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 1209600>|null $idleRuntimeSessionTimeout
 * @property int<60, 1209600>|null $maxLifetime
 */
class LifecycleConfiguration extends Shape
{
    /**
     * @param array{
     *     idleRuntimeSessionTimeout?: int<60, 1209600>|null,
     *     maxLifetime?: int<60, 1209600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
