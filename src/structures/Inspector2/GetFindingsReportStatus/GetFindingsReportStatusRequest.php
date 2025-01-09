<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class GetFindingsReportStatusRequest extends Request
{
    /**
     * @param array{reportId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
