<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TsvStoreOptions $tsvStoreOptions
 */
class StoreOptions extends Shape
{
    /**
     * @param array{tsvStoreOptions?: TsvStoreOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
