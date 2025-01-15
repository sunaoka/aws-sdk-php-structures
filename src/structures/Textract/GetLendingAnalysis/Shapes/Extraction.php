<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LendingDocument|null $LendingDocument
 * @property ExpenseDocument|null $ExpenseDocument
 * @property IdentityDocument|null $IdentityDocument
 */
class Extraction extends Shape
{
    /**
     * @param array{
     *     LendingDocument?: LendingDocument|null,
     *     ExpenseDocument?: ExpenseDocument|null,
     *     IdentityDocument?: IdentityDocument|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
