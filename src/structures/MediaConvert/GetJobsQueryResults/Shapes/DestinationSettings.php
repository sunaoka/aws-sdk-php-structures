<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationSettings|null $S3Settings
 */
class DestinationSettings extends Shape
{
    /**
     * @param array{S3Settings?: S3DestinationSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
