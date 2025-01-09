<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 */
class MissingNodeConfigurationFlowValidationDetails extends Shape
{
    /**
     * @param array{node: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
