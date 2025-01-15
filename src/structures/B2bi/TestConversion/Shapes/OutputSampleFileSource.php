<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $fileLocation
 */
class OutputSampleFileSource extends Shape
{
    /**
     * @param array{fileLocation?: S3Location|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
