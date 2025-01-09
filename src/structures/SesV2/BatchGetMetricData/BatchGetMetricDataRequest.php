<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetMetricDataQuery> $Queries
 */
class BatchGetMetricDataRequest extends Request
{
    /**
     * @param array{Queries: list<Shapes\BatchGetMetricDataQuery>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
