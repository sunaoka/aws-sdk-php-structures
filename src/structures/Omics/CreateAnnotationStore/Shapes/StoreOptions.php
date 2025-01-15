<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TsvStoreOptions|null $tsvStoreOptions
 */
class StoreOptions extends Shape
{
    /**
     * @param array{tsvStoreOptions?: TsvStoreOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
