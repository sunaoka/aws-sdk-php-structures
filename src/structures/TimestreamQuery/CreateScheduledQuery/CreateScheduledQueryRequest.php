<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $QueryString
 * @property Shapes\ScheduleConfiguration $ScheduleConfiguration
 * @property Shapes\NotificationConfiguration $NotificationConfiguration
 * @property Shapes\TargetConfiguration|null $TargetConfiguration
 * @property string|null $ClientToken
 * @property string $ScheduledQueryExecutionRoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
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
     *     TargetConfiguration?: Shapes\TargetConfiguration|null,
     *     ClientToken?: string|null,
     *     ScheduledQueryExecutionRoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     ErrorReportConfiguration: Shapes\ErrorReportConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
