<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingEnabled|null $loggingEnabled
 */
class TableBucketLoggingStatus extends Shape
{
    /**
     * @param array{loggingEnabled?: LoggingEnabled|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
