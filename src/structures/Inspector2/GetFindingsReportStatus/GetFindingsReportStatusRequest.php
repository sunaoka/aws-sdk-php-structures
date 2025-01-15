<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $reportId
 */
class GetFindingsReportStatusRequest extends Request
{
    /**
     * @param array{reportId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
