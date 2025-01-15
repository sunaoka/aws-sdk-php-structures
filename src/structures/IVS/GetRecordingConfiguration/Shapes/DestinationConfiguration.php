<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationConfiguration|null $s3
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{s3?: S3DestinationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
