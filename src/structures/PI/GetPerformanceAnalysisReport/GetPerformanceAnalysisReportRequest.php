<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property string $AnalysisReportId
 * @property 'PLAIN_TEXT'|'MARKDOWN' $TextFormat
 * @property 'EN_US' $AcceptLanguage
 */
class GetPerformanceAnalysisReportRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     AnalysisReportId: string,
     *     TextFormat?: 'PLAIN_TEXT'|'MARKDOWN',
     *     AcceptLanguage?: 'EN_US'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
