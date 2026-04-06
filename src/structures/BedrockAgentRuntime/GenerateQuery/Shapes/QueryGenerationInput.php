<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property 'TEXT' $type
 */
class QueryGenerationInput extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     type: 'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
