<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LinuxOperatingSystemConfiguration|null $linux
 */
class OperatingSystemConfiguration extends Shape
{
    /**
     * @param array{linux?: LinuxOperatingSystemConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
