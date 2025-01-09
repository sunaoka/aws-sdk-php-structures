<?php

namespace Sunaoka\Aws\Structures\PI\DeletePerformanceAnalysisReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property string $AnalysisReportId
 */
class DeletePerformanceAnalysisReportRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     AnalysisReportId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
