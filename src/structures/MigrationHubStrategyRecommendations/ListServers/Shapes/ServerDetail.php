<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $antipatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS' $antipatternReportStatus
 * @property string $antipatternReportStatusMessage
 * @property list<StrategySummary> $applicationComponentStrategySummary
 * @property 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess' $dataCollectionStatus
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastAnalyzedTimestamp
 * @property list<AntipatternSeveritySummary> $listAntipatternSeveritySummary
 * @property string $name
 * @property RecommendationSet $recommendationSet
 * @property ServerError $serverError
 * @property string $serverType
 * @property string $statusMessage
 * @property SystemInfo $systemInfo
 */
class ServerDetail extends Shape
{
    /**
     * @param array{
     *     antipatternReportS3Object?: S3Object,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS',
     *     antipatternReportStatusMessage?: string,
     *     applicationComponentStrategySummary?: list<StrategySummary>,
     *     dataCollectionStatus?: 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess',
     *     id?: string,
     *     lastAnalyzedTimestamp?: \Aws\Api\DateTimeResult,
     *     listAntipatternSeveritySummary?: list<AntipatternSeveritySummary>,
     *     name?: string,
     *     recommendationSet?: RecommendationSet,
     *     serverError?: ServerError,
     *     serverType?: string,
     *     statusMessage?: string,
     *     systemInfo?: SystemInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
