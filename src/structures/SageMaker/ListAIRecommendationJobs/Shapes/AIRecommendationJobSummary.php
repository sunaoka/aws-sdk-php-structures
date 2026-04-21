<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIRecommendationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AIRecommendationJobName
 * @property string $AIRecommendationJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $AIRecommendationJobStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class AIRecommendationJobSummary extends Shape
{
    /**
     * @param array{
     *     AIRecommendationJobName: string,
     *     AIRecommendationJobArn: string,
     *     AIRecommendationJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
