<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $date
 */
class GetMetricsSummaryRequest extends Request
{
    /**
     * @param array{date: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
