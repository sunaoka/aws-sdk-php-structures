<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListBusinessReportSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property 'ACCESS_DENIED'|'NO_SUCH_BUCKET'|'INTERNAL_FAILURE'|null $FailureCode
 * @property BusinessReportS3Location|null $S3Location
 * @property \Aws\Api\DateTimeResult|null $DeliveryTime
 * @property string|null $DownloadUrl
 */
class BusinessReport extends Shape
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     FailureCode?: 'ACCESS_DENIED'|'NO_SUCH_BUCKET'|'INTERNAL_FAILURE'|null,
     *     S3Location?: BusinessReportS3Location|null,
     *     DeliveryTime?: \Aws\Api\DateTimeResult|null,
     *     DownloadUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
