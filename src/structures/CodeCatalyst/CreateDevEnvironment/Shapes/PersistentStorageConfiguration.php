<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateDevEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInGiB
 */
class PersistentStorageConfiguration extends Shape
{
    /**
     * @param array{sizeInGiB: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
