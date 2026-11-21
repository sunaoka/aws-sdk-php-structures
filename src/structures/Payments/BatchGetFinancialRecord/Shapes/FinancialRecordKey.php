<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property string|null $invoiceIdentifier
 */
class FinancialRecordKey extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     invoiceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
