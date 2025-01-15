<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess'|null $runTimeAssessmentStatus
 */
class ServerStatusSummary extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     runTimeAssessmentStatus?: 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
