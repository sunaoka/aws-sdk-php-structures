<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomExtractionConfiguration|null $customExtractionConfiguration
 */
class ExtractionConfiguration extends Shape
{
    /**
     * @param array{customExtractionConfiguration?: CustomExtractionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
