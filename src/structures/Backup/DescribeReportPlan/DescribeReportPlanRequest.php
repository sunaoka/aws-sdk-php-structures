<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 */
class DescribeReportPlanRequest extends Request
{
    /**
     * @param array{ReportPlanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
