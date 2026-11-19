<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'PRIVILEGED'|null $privilegeMode
 */
class LinuxOperatingSystemConfiguration extends Shape
{
    /**
     * @param array{privilegeMode?: 'STANDARD'|'PRIVILEGED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
