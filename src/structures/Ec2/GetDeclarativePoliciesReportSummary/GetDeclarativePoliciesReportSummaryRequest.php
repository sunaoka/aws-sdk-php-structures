<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ReportId
 */
class GetDeclarativePoliciesReportSummaryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ReportId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
