<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateCustomPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $s3Location
 */
class CustomPluginLocation extends Shape
{
    /**
     * @param array{s3Location: S3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
