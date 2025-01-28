<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CachePointBlock|null $cachePoint
 * @property list<PromptInputVariable>|null $inputVariables
 * @property string $text
 */
class TextPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     cachePoint?: CachePointBlock|null,
     *     inputVariables?: list<PromptInputVariable>|null,
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
