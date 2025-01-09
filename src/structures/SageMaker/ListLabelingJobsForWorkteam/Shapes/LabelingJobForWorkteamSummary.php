<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelingJobName
 * @property string $JobReferenceCode
 * @property string $WorkRequesterAccountId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property LabelCountersForWorkteam $LabelCounters
 * @property int $NumberOfHumanWorkersPerDataObject
 */
class LabelingJobForWorkteamSummary extends Shape
{
    /**
     * @param array{
     *     LabelingJobName?: string,
     *     JobReferenceCode: string,
     *     WorkRequesterAccountId: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LabelCounters?: LabelCountersForWorkteam,
     *     NumberOfHumanWorkersPerDataObject?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
