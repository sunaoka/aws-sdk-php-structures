<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStoreVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TsvVersionOptions $tsvVersionOptions
 */
class VersionOptions extends Shape
{
    /**
     * @param array{tsvVersionOptions?: TsvVersionOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
