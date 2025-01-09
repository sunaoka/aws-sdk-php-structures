<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisStatusUnion $analysisStatus
 * @property 'SOURCE_CODE_ANALYSIS'|'DATABASE_ANALYSIS'|'RUNTIME_ANALYSIS'|'BINARY_ANALYSIS' $analysisType
 * @property list<AntipatternReportResult> $antipatternReportResultList
 * @property string $statusMessage
 */
class Result extends Shape
{
    /**
     * @param array{
     *     analysisStatus?: AnalysisStatusUnion,
     *     analysisType?: 'SOURCE_CODE_ANALYSIS'|'DATABASE_ANALYSIS'|'RUNTIME_ANALYSIS'|'BINARY_ANALYSIS',
     *     antipatternReportResultList?: list<AntipatternReportResult>,
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
