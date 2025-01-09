<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess' $runTimeAssessmentStatus
 */
class ServerStatusSummary extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     runTimeAssessmentStatus?: 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
