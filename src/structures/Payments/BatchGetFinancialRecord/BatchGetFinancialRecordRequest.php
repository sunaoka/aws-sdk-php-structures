<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FinancialRecordKey> $keys
 */
class BatchGetFinancialRecordRequest extends Request
{
    /**
     * @param array{keys: list<Shapes\FinancialRecordKey>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
