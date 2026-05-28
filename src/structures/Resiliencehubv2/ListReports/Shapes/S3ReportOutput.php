<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3ObjectKey
 */
class S3ReportOutput extends Shape
{
    /**
     * @param array{s3ObjectKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
