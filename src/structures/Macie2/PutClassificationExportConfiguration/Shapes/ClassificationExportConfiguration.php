<?php

namespace Sunaoka\Aws\Structures\Macie2\PutClassificationExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Destination $s3Destination
 */
class ClassificationExportConfiguration extends Shape
{
    /**
     * @param array{s3Destination?: S3Destination} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
