<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityTestReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportId
 */
class GetDeliverabilityTestReportRequest extends Request
{
    /**
     * @param array{ReportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
