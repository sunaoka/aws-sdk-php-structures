<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReportOutputConfiguration>|null $reportOutput
 */
class ReportConfiguration extends Shape
{
    /**
     * @param array{reportOutput?: list<ReportOutputConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
