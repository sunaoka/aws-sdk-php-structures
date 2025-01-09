<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $QueryString
 * @property Shapes\ScheduleConfiguration $ScheduleConfiguration
 * @property Shapes\NotificationConfiguration $NotificationConfiguration
 * @property Shapes\TargetConfiguration $TargetConfiguration
 * @property string $ClientToken
 * @property string $ScheduledQueryExecutionRoleArn
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property Shapes\ErrorReportConfiguration $ErrorReportConfiguration
 */
class CreateScheduledQueryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     QueryString: string,
     *     ScheduleConfiguration: Shapes\ScheduleConfiguration,
     *     NotificationConfiguration: Shapes\NotificationConfiguration,
     *     TargetConfiguration?: Shapes\TargetConfiguration,
     *     ClientToken?: string,
     *     ScheduledQueryExecutionRoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     ErrorReportConfiguration: Shapes\ErrorReportConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
