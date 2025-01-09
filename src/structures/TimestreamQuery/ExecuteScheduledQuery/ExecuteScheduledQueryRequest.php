<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ExecuteScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledQueryArn
 * @property \Aws\Api\DateTimeResult $InvocationTime
 * @property string $ClientToken
 * @property Shapes\ScheduledQueryInsights $QueryInsights
 */
class ExecuteScheduledQueryRequest extends Request
{
    /**
     * @param array{
     *     ScheduledQueryArn: string,
     *     InvocationTime: \Aws\Api\DateTimeResult,
     *     ClientToken?: string,
     *     QueryInsights?: Shapes\ScheduledQueryInsights
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
