<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryExecutionId
 */
class GetQueryRuntimeStatisticsRequest extends Request
{
    /**
     * @param array{QueryExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
