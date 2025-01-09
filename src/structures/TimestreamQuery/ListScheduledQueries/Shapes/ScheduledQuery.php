<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'ENABLED'|'DISABLED' $State
 * @property \Aws\Api\DateTimeResult $PreviousInvocationTime
 * @property \Aws\Api\DateTimeResult $NextInvocationTime
 * @property ErrorReportConfiguration $ErrorReportConfiguration
 * @property TargetDestination $TargetDestination
 * @property 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE' $LastRunStatus
 */
class ScheduledQuery extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     State: 'ENABLED'|'DISABLED',
     *     PreviousInvocationTime?: \Aws\Api\DateTimeResult,
     *     NextInvocationTime?: \Aws\Api\DateTimeResult,
     *     ErrorReportConfiguration?: ErrorReportConfiguration,
     *     TargetDestination?: TargetDestination,
     *     LastRunStatus?: 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
