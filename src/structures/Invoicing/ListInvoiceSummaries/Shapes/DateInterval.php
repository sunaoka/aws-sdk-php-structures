<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 */
class DateInterval extends Shape
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
