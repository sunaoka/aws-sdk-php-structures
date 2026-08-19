<?php

namespace Sunaoka\Aws\Structures\Redshift\ResumeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3TablePublishStatus|null $S3Tables
 */
class LoggingPublishStatus extends Shape
{
    /**
     * @param array{S3Tables?: S3TablePublishStatus|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
