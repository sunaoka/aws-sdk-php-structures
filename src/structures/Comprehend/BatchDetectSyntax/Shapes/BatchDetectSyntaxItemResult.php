<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSyntax\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property list<SyntaxToken> $SyntaxTokens
 */
class BatchDetectSyntaxItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     SyntaxTokens?: list<SyntaxToken>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
