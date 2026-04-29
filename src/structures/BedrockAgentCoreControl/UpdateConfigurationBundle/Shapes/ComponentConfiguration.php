<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateConfigurationBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $configuration
 */
class ComponentConfiguration extends Shape
{
    /**
     * @param array{configuration: Document} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
