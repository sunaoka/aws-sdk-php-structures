<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Pages
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{Pages?: int<0, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
