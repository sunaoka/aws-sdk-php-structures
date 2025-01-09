<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteReportPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 */
class DeleteReportPlanRequest extends Request
{
    /**
     * @param array{ReportPlanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
