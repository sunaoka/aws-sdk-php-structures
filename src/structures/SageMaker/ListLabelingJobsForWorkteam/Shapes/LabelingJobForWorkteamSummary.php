<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LabelingJobName
 * @property string $JobReferenceCode
 * @property string $WorkRequesterAccountId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property LabelCountersForWorkteam|null $LabelCounters
 * @property int<1, 9>|null $NumberOfHumanWorkersPerDataObject
 */
class LabelingJobForWorkteamSummary extends Shape
{
    /**
     * @param array{
     *     LabelingJobName?: string|null,
     *     JobReferenceCode: string,
     *     WorkRequesterAccountId: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LabelCounters?: LabelCountersForWorkteam|null,
     *     NumberOfHumanWorkersPerDataObject?: int<1, 9>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
