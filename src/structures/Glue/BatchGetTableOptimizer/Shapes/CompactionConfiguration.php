<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergCompactionConfiguration|null $icebergConfiguration
 */
class CompactionConfiguration extends Shape
{
    /**
     * @param array{icebergConfiguration?: IcebergCompactionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
