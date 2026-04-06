<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ColumnStatisticsTaskRunId
 */
class GetColumnStatisticsTaskRunRequest extends Request
{
    /**
     * @param array{ColumnStatisticsTaskRunId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
