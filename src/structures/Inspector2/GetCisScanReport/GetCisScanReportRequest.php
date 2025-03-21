<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PDF'|'CSV'|null $reportFormat
 * @property string $scanArn
 * @property list<string>|null $targetAccounts
 */
class GetCisScanReportRequest extends Request
{
    /**
     * @param array{
     *     reportFormat?: 'PDF'|'CSV'|null,
     *     scanArn: string,
     *     targetAccounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
