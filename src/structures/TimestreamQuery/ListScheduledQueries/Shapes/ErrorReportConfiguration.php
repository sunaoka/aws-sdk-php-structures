<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Configuration $S3Configuration
 */
class ErrorReportConfiguration extends Shape
{
    /**
     * @param array{S3Configuration: S3Configuration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
