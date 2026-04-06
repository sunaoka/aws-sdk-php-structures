<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property list<string> $SloIds
 */
class BatchGetServiceLevelObjectiveBudgetReportRequest extends Request
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     SloIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
