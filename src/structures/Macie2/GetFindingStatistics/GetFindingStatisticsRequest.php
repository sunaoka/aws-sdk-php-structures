<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FindingCriteria $findingCriteria
 * @property 'resourcesAffected.s3Bucket.name'|'type'|'classificationDetails.jobId'|'severity.description' $groupBy
 * @property int $size
 * @property Shapes\FindingStatisticsSortCriteria $sortCriteria
 */
class GetFindingStatisticsRequest extends Request
{
    /**
     * @param array{
     *     findingCriteria?: Shapes\FindingCriteria,
     *     groupBy: 'resourcesAffected.s3Bucket.name'|'type'|'classificationDetails.jobId'|'severity.description',
     *     size?: int,
     *     sortCriteria?: Shapes\FindingStatisticsSortCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
