<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InvoiceSummariesSelector $Selector
 * @property Shapes\InvoiceSummariesFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListInvoiceSummariesRequest extends Request
{
    /**
     * @param array{
     *     Selector: Shapes\InvoiceSummariesSelector,
     *     Filter?: Shapes\InvoiceSummariesFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
