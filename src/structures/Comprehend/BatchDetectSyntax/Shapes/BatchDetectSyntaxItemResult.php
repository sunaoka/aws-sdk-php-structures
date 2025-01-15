<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSyntax\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property list<SyntaxToken>|null $SyntaxTokens
 */
class BatchDetectSyntaxItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     SyntaxTokens?: list<SyntaxToken>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
