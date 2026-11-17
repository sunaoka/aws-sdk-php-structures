<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReportData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 * @property 'CSV'|'JSON'|'PARQUET' $format
 */
class GetAgentOrganizationalReportDataRequest extends Request
{
    /**
     * @param array{
     *     reportId: string,
     *     format: 'CSV'|'JSON'|'PARQUET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
