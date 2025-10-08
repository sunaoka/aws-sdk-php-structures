<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT_ID'|'INVOICE_ID' $ResourceType
 * @property string $Value
 */
class InvoiceSummariesSelector extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'ACCOUNT_ID'|'INVOICE_ID',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
