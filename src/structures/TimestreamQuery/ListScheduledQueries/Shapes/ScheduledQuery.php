<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'ENABLED'|'DISABLED' $State
 * @property \Aws\Api\DateTimeResult|null $PreviousInvocationTime
 * @property \Aws\Api\DateTimeResult|null $NextInvocationTime
 * @property ErrorReportConfiguration|null $ErrorReportConfiguration
 * @property TargetDestination|null $TargetDestination
 * @property 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE'|null $LastRunStatus
 */
class ScheduledQuery extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     State: 'ENABLED'|'DISABLED',
     *     PreviousInvocationTime?: \Aws\Api\DateTimeResult|null,
     *     NextInvocationTime?: \Aws\Api\DateTimeResult|null,
     *     ErrorReportConfiguration?: ErrorReportConfiguration|null,
     *     TargetDestination?: TargetDestination|null,
     *     LastRunStatus?: 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
