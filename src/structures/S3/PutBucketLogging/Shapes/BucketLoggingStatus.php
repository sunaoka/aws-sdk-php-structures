<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingEnabled $LoggingEnabled
 */
class BucketLoggingStatus extends Shape
{
    /**
     * @param array{LoggingEnabled?: LoggingEnabled} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
