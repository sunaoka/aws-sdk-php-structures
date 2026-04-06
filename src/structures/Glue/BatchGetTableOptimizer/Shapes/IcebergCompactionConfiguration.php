<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'binpack'|'sort'|'z-order'|null $strategy
 * @property int|null $minInputFiles
 * @property int|null $deleteFileThreshold
 */
class IcebergCompactionConfiguration extends Shape
{
    /**
     * @param array{
     *     strategy?: 'binpack'|'sort'|'z-order'|null,
     *     minInputFiles?: int|null,
     *     deleteFileThreshold?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
