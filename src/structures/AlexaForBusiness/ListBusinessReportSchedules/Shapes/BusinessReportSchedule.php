<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListBusinessReportSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ScheduleArn
 * @property string|null $ScheduleName
 * @property string|null $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property 'CSV'|'CSV_ZIP'|null $Format
 * @property BusinessReportContentRange|null $ContentRange
 * @property BusinessReportRecurrence|null $Recurrence
 * @property BusinessReport|null $LastBusinessReport
 */
class BusinessReportSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleArn?: string|null,
     *     ScheduleName?: string|null,
     *     S3BucketName?: string|null,
     *     S3KeyPrefix?: string|null,
     *     Format?: 'CSV'|'CSV_ZIP'|null,
     *     ContentRange?: BusinessReportContentRange|null,
     *     Recurrence?: BusinessReportRecurrence|null,
     *     LastBusinessReport?: BusinessReport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
