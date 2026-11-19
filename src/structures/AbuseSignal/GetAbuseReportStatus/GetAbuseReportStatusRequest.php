<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\GetAbuseReportStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class GetAbuseReportStatusRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
