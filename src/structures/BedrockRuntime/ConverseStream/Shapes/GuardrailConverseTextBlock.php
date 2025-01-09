<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property list<'grounding_source'|'query'|'guard_content'> $qualifiers
 */
class GuardrailConverseTextBlock extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     qualifiers?: list<'grounding_source'|'query'|'guard_content'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
