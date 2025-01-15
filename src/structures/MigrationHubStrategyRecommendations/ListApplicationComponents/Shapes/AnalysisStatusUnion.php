<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|null $runtimeAnalysisStatus
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED'|null $srcCodeOrDbAnalysisStatus
 */
class AnalysisStatusUnion extends Shape
{
    /**
     * @param array{
     *     runtimeAnalysisStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|null,
     *     srcCodeOrDbAnalysisStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
