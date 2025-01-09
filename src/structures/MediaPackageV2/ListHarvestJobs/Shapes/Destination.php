<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListHarvestJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationConfig $S3Destination
 */
class Destination extends Shape
{
    /**
     * @param array{S3Destination: S3DestinationConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
