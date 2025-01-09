<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Configuration $s3Configuration
 */
class LogDeliveryConfiguration extends Shape
{
    /**
     * @param array{s3Configuration: S3Configuration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
