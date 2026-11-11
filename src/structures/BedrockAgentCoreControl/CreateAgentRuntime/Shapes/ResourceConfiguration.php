<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minimumMemoryInMiB
 */
class ResourceConfiguration extends Shape
{
    /**
     * @param array{minimumMemoryInMiB: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
