<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED' $srcCodeOrDbAnalysisStatus
 */
class ApplicationComponentStatusSummary extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     srcCodeOrDbAnalysisStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
