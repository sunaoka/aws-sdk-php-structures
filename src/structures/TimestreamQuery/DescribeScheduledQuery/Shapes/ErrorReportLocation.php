<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ReportLocation|null $S3ReportLocation
 */
class ErrorReportLocation extends Shape
{
    /**
     * @param array{S3ReportLocation?: S3ReportLocation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
