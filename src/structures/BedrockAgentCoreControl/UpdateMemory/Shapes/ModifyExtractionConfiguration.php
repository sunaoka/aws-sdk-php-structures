<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomExtractionConfigurationInput|null $customExtractionConfiguration
 */
class ModifyExtractionConfiguration extends Shape
{
    /**
     * @param array{customExtractionConfiguration?: CustomExtractionConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
