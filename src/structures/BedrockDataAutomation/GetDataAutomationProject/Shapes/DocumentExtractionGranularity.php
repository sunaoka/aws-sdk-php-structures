<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DOCUMENT'|'PAGE'|'ELEMENT'|'WORD'|'LINE'> $types
 */
class DocumentExtractionGranularity extends Shape
{
    /**
     * @param array{types?: list<'DOCUMENT'|'PAGE'|'ELEMENT'|'WORD'|'LINE'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
