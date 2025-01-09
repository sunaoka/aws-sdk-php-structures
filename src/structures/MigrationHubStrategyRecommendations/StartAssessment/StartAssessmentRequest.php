<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'StrategyRecommendationsApplicationDataCollector'|'ManualImport'|'ApplicationDiscoveryService' $assessmentDataSourceType
 * @property list<Shapes\AssessmentTarget> $assessmentTargets
 * @property string $s3bucketForAnalysisData
 * @property string $s3bucketForReportData
 */
class StartAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentDataSourceType?: 'StrategyRecommendationsApplicationDataCollector'|'ManualImport'|'ApplicationDiscoveryService',
     *     assessmentTargets?: list<Shapes\AssessmentTarget>,
     *     s3bucketForAnalysisData?: string,
     *     s3bucketForReportData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
