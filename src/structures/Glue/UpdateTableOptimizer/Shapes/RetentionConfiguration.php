<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergRetentionConfiguration|null $icebergConfiguration
 */
class RetentionConfiguration extends Shape
{
    /**
     * @param array{icebergConfiguration?: IcebergRetentionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
