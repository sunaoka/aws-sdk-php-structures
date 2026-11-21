<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DOCUMENT'|'PAGE'|'ELEMENT'|'WORD'|'LINE'>|null $Types
 */
class ExtractionGranularity extends Shape
{
    /**
     * @param array{Types?: list<'DOCUMENT'|'PAGE'|'ELEMENT'|'WORD'|'LINE'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
