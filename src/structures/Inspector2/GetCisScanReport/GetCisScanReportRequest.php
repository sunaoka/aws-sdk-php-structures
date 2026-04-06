<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanArn
 * @property list<string>|null $targetAccounts
 * @property 'PDF'|'CSV'|null $reportFormat
 */
class GetCisScanReportRequest extends Request
{
    /**
     * @param array{
     *     scanArn: string,
     *     targetAccounts?: list<string>|null,
     *     reportFormat?: 'PDF'|'CSV'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
