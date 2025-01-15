<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalyzerNameUnion|null $analyzerName
 * @property S3Object|null $antiPatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null $antipatternReportStatus
 * @property string|null $antipatternReportStatusMessage
 */
class AntipatternReportResult extends Shape
{
    /**
     * @param array{
     *     analyzerName?: AnalyzerNameUnion|null,
     *     antiPatternReportS3Object?: S3Object|null,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null,
     *     antipatternReportStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
