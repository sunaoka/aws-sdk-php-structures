<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageMetrics|null $total
 * @property StorageMetrics|null $blobs
 */
class DictionariesInfo extends Shape
{
    /**
     * @param array{
     *     total?: StorageMetrics|null,
     *     blobs?: StorageMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
