<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateBusinessReportSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ScheduleName
 * @property string|null $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property 'CSV'|'CSV_ZIP' $Format
 * @property Shapes\BusinessReportContentRange $ContentRange
 * @property Shapes\BusinessReportRecurrence|null $Recurrence
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateBusinessReportScheduleRequest extends Request
{
    /**
     * @param array{
     *     ScheduleName?: string|null,
     *     S3BucketName?: string|null,
     *     S3KeyPrefix?: string|null,
     *     Format: 'CSV'|'CSV_ZIP',
     *     ContentRange: Shapes\BusinessReportContentRange,
     *     Recurrence?: Shapes\BusinessReportRecurrence|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
