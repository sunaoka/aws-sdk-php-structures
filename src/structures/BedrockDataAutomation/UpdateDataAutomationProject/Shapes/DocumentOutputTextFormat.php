<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PLAIN_TEXT'|'MARKDOWN'|'HTML'|'CSV'>|null $types
 */
class DocumentOutputTextFormat extends Shape
{
    /**
     * @param array{types?: list<'PLAIN_TEXT'|'MARKDOWN'|'HTML'|'CSV'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
