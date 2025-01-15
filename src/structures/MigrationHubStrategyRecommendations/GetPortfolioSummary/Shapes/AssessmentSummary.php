<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $antipatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null $antipatternReportStatus
 * @property string|null $antipatternReportStatusMessage
 * @property \Aws\Api\DateTimeResult|null $lastAnalyzedTimestamp
 * @property list<AntipatternSeveritySummary>|null $listAntipatternSeveritySummary
 * @property list<ApplicationComponentStatusSummary>|null $listApplicationComponentStatusSummary
 * @property list<StrategySummary>|null $listApplicationComponentStrategySummary
 * @property list<ApplicationComponentSummary>|null $listApplicationComponentSummary
 * @property list<ServerStatusSummary>|null $listServerStatusSummary
 * @property list<StrategySummary>|null $listServerStrategySummary
 * @property list<ServerSummary>|null $listServerSummary
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     antipatternReportS3Object?: S3Object|null,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null,
     *     antipatternReportStatusMessage?: string|null,
     *     lastAnalyzedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     listAntipatternSeveritySummary?: list<AntipatternSeveritySummary>|null,
     *     listApplicationComponentStatusSummary?: list<ApplicationComponentStatusSummary>|null,
     *     listApplicationComponentStrategySummary?: list<StrategySummary>|null,
     *     listApplicationComponentSummary?: list<ApplicationComponentSummary>|null,
     *     listServerStatusSummary?: list<ServerStatusSummary>|null,
     *     listServerStrategySummary?: list<StrategySummary>|null,
     *     listServerSummary?: list<ServerSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
