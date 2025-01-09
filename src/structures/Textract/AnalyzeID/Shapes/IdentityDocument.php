<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeID\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DocumentIndex
 * @property list<IdentityDocumentField> $IdentityDocumentFields
 * @property list<Block> $Blocks
 */
class IdentityDocument extends Shape
{
    /**
     * @param array{
     *     DocumentIndex?: int<0, max>,
     *     IdentityDocumentFields?: list<IdentityDocumentField>,
     *     Blocks?: list<Block>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
