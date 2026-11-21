<?php

namespace Sunaoka\Aws\Structures\Payments\GetFinancialRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $identifier
 * @property string|null $invoiceIdentifier
 */
class GetFinancialRecordRequest extends Request
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
