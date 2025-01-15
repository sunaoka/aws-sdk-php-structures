<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FindingCriteria|null $findingCriteria
 * @property 'resourcesAffected.s3Bucket.name'|'type'|'classificationDetails.jobId'|'severity.description' $groupBy
 * @property int|null $size
 * @property Shapes\FindingStatisticsSortCriteria|null $sortCriteria
 */
class GetFindingStatisticsRequest extends Request
{
    /**
     * @param array{
     *     findingCriteria?: Shapes\FindingCriteria|null,
     *     groupBy: 'resourcesAffected.s3Bucket.name'|'type'|'classificationDetails.jobId'|'severity.description',
     *     size?: int|null,
     *     sortCriteria?: Shapes\FindingStatisticsSortCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
