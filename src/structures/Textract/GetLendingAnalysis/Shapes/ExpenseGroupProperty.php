<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Types
 * @property string|null $Id
 */
class ExpenseGroupProperty extends Shape
{
    /**
     * @param array{
     *     Types?: list<string>|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
