<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReportOutputConfiguration> $reportOutput
 */
class TestRunReportConfiguration extends Shape
{
    /**
     * @param array{reportOutput: list<ReportOutputConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
