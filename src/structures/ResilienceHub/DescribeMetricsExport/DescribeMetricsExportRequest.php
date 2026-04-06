<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeMetricsExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricsExportId
 */
class DescribeMetricsExportRequest extends Request
{
    /**
     * @param array{metricsExportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
