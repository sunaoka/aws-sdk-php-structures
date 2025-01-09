<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pages
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{Pages?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
