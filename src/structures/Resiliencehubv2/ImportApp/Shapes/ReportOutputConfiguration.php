<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ReportOutputConfiguration|null $s3
 */
class ReportOutputConfiguration extends Shape
{
    /**
     * @param array{s3?: S3ReportOutputConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
