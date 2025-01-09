<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrefixLevelStorageMetrics $StorageMetrics
 */
class PrefixLevel extends Shape
{
    /**
     * @param array{StorageMetrics: PrefixLevelStorageMetrics} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
