<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountBulkJobReportUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property 'FAILED_RECORDS'|'ALL_RECORDS'|null $ReportType
 */
class GetCustomerAccountBulkJobReportUrlRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ReportType?: 'FAILED_RECORDS'|'ALL_RECORDS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
