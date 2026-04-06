<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ExecuteScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledQueryArn
 * @property \Aws\Api\DateTimeResult $InvocationTime
 * @property string|null $ClientToken
 * @property Shapes\ScheduledQueryInsights|null $QueryInsights
 */
class ExecuteScheduledQueryRequest extends Request
{
    /**
     * @param array{
     *     ScheduledQueryArn: string,
     *     InvocationTime: \Aws\Api\DateTimeResult,
     *     ClientToken?: string|null,
     *     QueryInsights?: Shapes\ScheduledQueryInsights|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
