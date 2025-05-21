<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\GetAnalysisReportResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $ReportTime
 * @property 'TLS_SNI'|'HTTP_HOST'|null $AnalysisType
 * @property string|null $NextToken
 * @property list<Shapes\AnalysisTypeReportResult>|null $AnalysisReportResults
 */
class GetAnalysisReportResultsResponse extends Response
{
}
