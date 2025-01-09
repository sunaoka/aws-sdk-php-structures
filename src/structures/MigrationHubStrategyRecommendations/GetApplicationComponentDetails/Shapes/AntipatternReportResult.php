<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalyzerNameUnion $analyzerName
 * @property S3Object $antiPatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS' $antipatternReportStatus
 * @property string $antipatternReportStatusMessage
 */
class AntipatternReportResult extends Shape
{
    /**
     * @param array{
     *     analyzerName?: AnalyzerNameUnion,
     *     antiPatternReportS3Object?: S3Object,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS',
     *     antipatternReportStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
