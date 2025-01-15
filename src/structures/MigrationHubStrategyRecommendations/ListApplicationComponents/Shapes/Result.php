<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisStatusUnion|null $analysisStatus
 * @property 'SOURCE_CODE_ANALYSIS'|'DATABASE_ANALYSIS'|'RUNTIME_ANALYSIS'|'BINARY_ANALYSIS'|null $analysisType
 * @property list<AntipatternReportResult>|null $antipatternReportResultList
 * @property string|null $statusMessage
 */
class Result extends Shape
{
    /**
     * @param array{
     *     analysisStatus?: AnalysisStatusUnion|null,
     *     analysisType?: 'SOURCE_CODE_ANALYSIS'|'DATABASE_ANALYSIS'|'RUNTIME_ANALYSIS'|'BINARY_ANALYSIS'|null,
     *     antipatternReportResultList?: list<AntipatternReportResult>|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
