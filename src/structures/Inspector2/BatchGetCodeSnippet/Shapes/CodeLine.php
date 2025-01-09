<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property int $lineNumber
 */
class CodeLine extends Shape
{
    /**
     * @param array{
     *     content: string,
     *     lineNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
