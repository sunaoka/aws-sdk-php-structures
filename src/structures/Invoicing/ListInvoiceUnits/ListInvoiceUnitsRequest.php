<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filters $Filters
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 * @property \Aws\Api\DateTimeResult $AsOf
 */
class ListInvoiceUnitsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\Filters,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>,
     *     AsOf?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
