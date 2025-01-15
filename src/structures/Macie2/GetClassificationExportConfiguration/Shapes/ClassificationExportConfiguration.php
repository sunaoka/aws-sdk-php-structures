<?php

namespace Sunaoka\Aws\Structures\Macie2\GetClassificationExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Destination|null $s3Destination
 */
class ClassificationExportConfiguration extends Shape
{
    /**
     * @param array{s3Destination?: S3Destination|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
