<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportJobId
 */
class DescribeReportJobRequest extends Request
{
    /**
     * @param array{ReportJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
