<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $antipatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null $antipatternReportStatus
 * @property string|null $antipatternReportStatusMessage
 * @property list<StrategySummary>|null $applicationComponentStrategySummary
 * @property 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess'|null $dataCollectionStatus
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastAnalyzedTimestamp
 * @property list<AntipatternSeveritySummary>|null $listAntipatternSeveritySummary
 * @property string|null $name
 * @property RecommendationSet|null $recommendationSet
 * @property ServerError|null $serverError
 * @property string|null $serverType
 * @property string|null $statusMessage
 * @property SystemInfo|null $systemInfo
 */
class ServerDetail extends Shape
{
    /**
     * @param array{
     *     antipatternReportS3Object?: S3Object|null,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null,
     *     antipatternReportStatusMessage?: string|null,
     *     applicationComponentStrategySummary?: list<StrategySummary>|null,
     *     dataCollectionStatus?: 'dataCollectionTaskToBeScheduled'|'dataCollectionTaskScheduled'|'dataCollectionTaskStarted'|'dataCollectionTaskStopped'|'dataCollectionTaskSuccess'|'dataCollectionTaskFailed'|'dataCollectionTaskPartialSuccess'|null,
     *     id?: string|null,
     *     lastAnalyzedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     listAntipatternSeveritySummary?: list<AntipatternSeveritySummary>|null,
     *     name?: string|null,
     *     recommendationSet?: RecommendationSet|null,
     *     serverError?: ServerError|null,
     *     serverType?: string|null,
     *     statusMessage?: string|null,
     *     systemInfo?: SystemInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
