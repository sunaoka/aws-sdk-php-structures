<?php

namespace Sunaoka\Aws\Structures\QConnect\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parsingPromptText
 */
class ParsingPrompt extends Shape
{
    /**
     * @param array{parsingPromptText: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
