<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'StrategyRecommendationsApplicationDataCollector'|'ManualImport'|'ApplicationDiscoveryService'|null $assessmentDataSourceType
 * @property list<Shapes\AssessmentTarget>|null $assessmentTargets
 * @property string|null $s3bucketForAnalysisData
 * @property string|null $s3bucketForReportData
 */
class StartAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentDataSourceType?: 'StrategyRecommendationsApplicationDataCollector'|'ManualImport'|'ApplicationDiscoveryService'|null,
     *     assessmentTargets?: list<Shapes\AssessmentTarget>|null,
     *     s3bucketForAnalysisData?: string|null,
     *     s3bucketForReportData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
