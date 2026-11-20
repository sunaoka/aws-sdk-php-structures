<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunityBulkJobReportUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $JobId
 * @property 'CSV' $ReportFormat
 * @property 'FAILED_RECORDS'|'ALL_RECORDS'|null $ReportType
 */
class GetOpportunityBulkJobReportUrlRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     JobId: string,
     *     ReportFormat: 'CSV',
     *     ReportType?: 'FAILED_RECORDS'|'ALL_RECORDS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
