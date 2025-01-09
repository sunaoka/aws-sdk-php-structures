<?php

namespace Sunaoka\Aws\Structures\Inspector2\CancelFindingsReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class CancelFindingsReportRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
