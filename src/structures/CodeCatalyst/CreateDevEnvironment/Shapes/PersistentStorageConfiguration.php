<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateDevEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 64> $sizeInGiB
 */
class PersistentStorageConfiguration extends Shape
{
    /**
     * @param array{sizeInGiB: int<0, 64>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
