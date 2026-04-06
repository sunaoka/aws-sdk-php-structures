<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableStorageClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'INTELLIGENT_TIERING' $storageClass
 */
class StorageClassConfiguration extends Shape
{
    /**
     * @param array{storageClass: 'STANDARD'|'INTELLIGENT_TIERING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
