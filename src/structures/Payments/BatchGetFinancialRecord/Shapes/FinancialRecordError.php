<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FinancialRecordKey $key
 * @property 'NOT_FOUND'|'INTERNAL_ERROR' $code
 * @property string $message
 */
class FinancialRecordError extends Shape
{
    /**
     * @param array{
     *     key: FinancialRecordKey,
     *     code: 'NOT_FOUND'|'INTERNAL_ERROR',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
