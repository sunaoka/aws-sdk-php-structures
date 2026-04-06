<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetQuotaUtilizationReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetQuotaUtilizationReportRequest extends Request
{
    /**
     * @param array{
     *     ReportId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
