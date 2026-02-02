<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ReportOutputConfiguration|null $s3Configuration
 */
class ReportOutputConfiguration extends Shape
{
    /**
     * @param array{s3Configuration?: S3ReportOutputConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
