<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT' $type
 * @property string $text
 */
class QueryGenerationInput extends Shape
{
    /**
     * @param array{
     *     type: 'TEXT',
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
