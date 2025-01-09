<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PDF'|'CSV' $reportFormat
 * @property string $scanArn
 * @property list<string> $targetAccounts
 */
class GetCisScanReportRequest extends Request
{
    /**
     * @param array{
     *     reportFormat?: 'PDF'|'CSV',
     *     scanArn: string,
     *     targetAccounts?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
