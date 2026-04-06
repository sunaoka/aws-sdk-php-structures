<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Configuration $s3Configuration
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{s3Configuration: S3Configuration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
