<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetDiscrepancyReportId
 */
class DescribeTestSetDiscrepancyReportRequest extends Request
{
    /**
     * @param array{testSetDiscrepancyReportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
