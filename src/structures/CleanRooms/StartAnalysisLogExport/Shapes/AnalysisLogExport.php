<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartAnalysisLogExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $analysisLogExportId
 * @property string $analysisId
 * @property 'PROTECTED_QUERY' $analysisType
 * @property string $membershipId
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED' $status
 * @property AnalysisLogExportResultConfiguration $resultConfiguration
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property AnalysisLogExportError|null $error
 */
class AnalysisLogExport extends Shape
{
    /**
     * @param array{
     *     analysisLogExportId: string,
     *     analysisId: string,
     *     analysisType: 'PROTECTED_QUERY',
     *     membershipId: string,
     *     status: 'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     resultConfiguration: AnalysisLogExportResultConfiguration,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     error?: AnalysisLogExportError|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
