<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListAnalysisLogExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $analysisLogExportId
 * @property string $analysisId
 * @property 'PROTECTED_QUERY' $analysisType
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createTime
 */
class AnalysisLogExportSummary extends Shape
{
    /**
     * @param array{
     *     analysisLogExportId: string,
     *     analysisId: string,
     *     analysisType: 'PROTECTED_QUERY',
     *     status: 'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     createTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
