<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationSettings $S3Settings
 */
class DestinationSettings extends Shape
{
    /**
     * @param array{S3Settings?: S3DestinationSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
