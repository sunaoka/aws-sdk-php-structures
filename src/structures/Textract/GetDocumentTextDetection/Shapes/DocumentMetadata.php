<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Pages
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{Pages?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
