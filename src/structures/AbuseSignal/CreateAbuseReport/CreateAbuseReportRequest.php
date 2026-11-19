<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\CreateAbuseReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReportData $report
 * @property string|null $correlationId
 * @property string|null $clientToken
 */
class CreateAbuseReportRequest extends Request
{
    /**
     * @param array{
     *     report: Shapes\ReportData,
     *     correlationId?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
