<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceCurrencyCode
 * @property string|null $TargetCurrencyCode
 * @property string|null $Rate
 */
class CurrencyExchangeDetails extends Shape
{
    /**
     * @param array{
     *     SourceCurrencyCode?: string|null,
     *     TargetCurrencyCode?: string|null,
     *     Rate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
