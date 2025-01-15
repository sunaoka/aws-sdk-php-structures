<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 */
class DataLakeEncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
