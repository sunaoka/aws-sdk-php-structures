<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property CachePointBlock|null $cachePoint
 * @property list<PromptInputVariable>|null $inputVariables
 */
class TextPromptTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     cachePoint?: CachePointBlock|null,
     *     inputVariables?: list<PromptInputVariable>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
