<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateBusinessReportSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduleArn
 * @property string|null $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property 'CSV'|'CSV_ZIP'|null $Format
 * @property string|null $ScheduleName
 * @property Shapes\BusinessReportRecurrence|null $Recurrence
 */
class UpdateBusinessReportScheduleRequest extends Request
{
    /**
     * @param array{
     *     ScheduleArn: string,
     *     S3BucketName?: string|null,
     *     S3KeyPrefix?: string|null,
     *     Format?: 'CSV'|'CSV_ZIP'|null,
     *     ScheduleName?: string|null,
     *     Recurrence?: Shapes\BusinessReportRecurrence|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
