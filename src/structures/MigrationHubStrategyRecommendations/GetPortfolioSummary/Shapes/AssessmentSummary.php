<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $antipatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS' $antipatternReportStatus
 * @property string $antipatternReportStatusMessage
 * @property \Aws\Api\DateTimeResult $lastAnalyzedTimestamp
 * @property list<AntipatternSeveritySummary> $listAntipatternSeveritySummary
 * @property list<ApplicationComponentStatusSummary> $listApplicationComponentStatusSummary
 * @property list<StrategySummary> $listApplicationComponentStrategySummary
 * @property list<ApplicationComponentSummary> $listApplicationComponentSummary
 * @property list<ServerStatusSummary> $listServerStatusSummary
 * @property list<StrategySummary> $listServerStrategySummary
 * @property list<ServerSummary> $listServerSummary
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     antipatternReportS3Object?: S3Object,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS',
     *     antipatternReportStatusMessage?: string,
     *     lastAnalyzedTimestamp?: \Aws\Api\DateTimeResult,
     *     listAntipatternSeveritySummary?: list<AntipatternSeveritySummary>,
     *     listApplicationComponentStatusSummary?: list<ApplicationComponentStatusSummary>,
     *     listApplicationComponentStrategySummary?: list<StrategySummary>,
     *     listApplicationComponentSummary?: list<ApplicationComponentSummary>,
     *     listServerStatusSummary?: list<ServerStatusSummary>,
     *     listServerStrategySummary?: list<StrategySummary>,
     *     listServerSummary?: list<ServerSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
