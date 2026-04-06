<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $output
 */
class MissingNodeOutputFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     output: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
