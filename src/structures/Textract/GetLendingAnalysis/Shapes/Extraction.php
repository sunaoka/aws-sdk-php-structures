<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LendingDocument $LendingDocument
 * @property ExpenseDocument $ExpenseDocument
 * @property IdentityDocument $IdentityDocument
 */
class Extraction extends Shape
{
    /**
     * @param array{
     *     LendingDocument?: LendingDocument,
     *     ExpenseDocument?: ExpenseDocument,
     *     IdentityDocument?: IdentityDocument
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
