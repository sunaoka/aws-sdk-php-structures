<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetMemoryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 */
class MetadataValue extends Shape
{
    /**
     * @param array{stringValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
