<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCacheReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheReportARN
 * @property 'IN_PROGRESS'|'COMPLETED'|'CANCELED'|'FAILED'|'ERROR'|null $CacheReportStatus
 * @property int<0, 100>|null $ReportCompletionPercent
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Role
 * @property string|null $FileShareARN
 * @property string|null $LocationARN
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property list<CacheReportFilter>|null $InclusionFilters
 * @property list<CacheReportFilter>|null $ExclusionFilters
 * @property string|null $ReportName
 * @property list<Tag>|null $Tags
 */
class CacheReportInfo extends Shape
{
    /**
     * @param array{
     *     CacheReportARN?: string|null,
     *     CacheReportStatus?: 'IN_PROGRESS'|'COMPLETED'|'CANCELED'|'FAILED'|'ERROR'|null,
     *     ReportCompletionPercent?: int<0, 100>|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Role?: string|null,
     *     FileShareARN?: string|null,
     *     LocationARN?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     InclusionFilters?: list<CacheReportFilter>|null,
     *     ExclusionFilters?: list<CacheReportFilter>|null,
     *     ReportName?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
