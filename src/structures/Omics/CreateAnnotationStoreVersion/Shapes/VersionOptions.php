<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStoreVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TsvVersionOptions|null $tsvVersionOptions
 */
class VersionOptions extends Shape
{
    /**
     * @param array{tsvVersionOptions?: TsvVersionOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
