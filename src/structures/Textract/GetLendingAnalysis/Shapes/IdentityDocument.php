<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $DocumentIndex
 * @property list<IdentityDocumentField>|null $IdentityDocumentFields
 * @property list<Block>|null $Blocks
 */
class IdentityDocument extends Shape
{
    /**
     * @param array{
     *     DocumentIndex?: int<0, max>|null,
     *     IdentityDocumentFields?: list<IdentityDocumentField>|null,
     *     Blocks?: list<Block>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
