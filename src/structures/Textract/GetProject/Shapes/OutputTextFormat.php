<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PLAIN_TEXT'|'MARKDOWN'|'HTML'|'CSV'>|null $Types
 */
class OutputTextFormat extends Shape
{
    /**
     * @param array{Types?: list<'PLAIN_TEXT'|'MARKDOWN'|'HTML'|'CSV'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
