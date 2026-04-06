<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filters|null $Filters
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $AsOf
 */
class ListInvoiceUnitsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\Filters|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     AsOf?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
