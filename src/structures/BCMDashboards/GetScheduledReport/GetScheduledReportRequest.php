<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetScheduledReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetScheduledReportRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
