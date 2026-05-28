<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReportOutputConfiguration> $reportOutputs
 */
class ServiceReportConfiguration extends Shape
{
    /**
     * @param array{reportOutputs: list<ReportOutputConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
