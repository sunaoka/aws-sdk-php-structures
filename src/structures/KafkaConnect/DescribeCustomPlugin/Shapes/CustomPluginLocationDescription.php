<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LocationDescription|null $s3Location
 */
class CustomPluginLocationDescription extends Shape
{
    /**
     * @param array{s3Location?: S3LocationDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
