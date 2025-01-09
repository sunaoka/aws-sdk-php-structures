<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $glueConnectionName
 */
class TableOptimizerVpcConfiguration extends Shape
{
    /**
     * @param array{glueConnectionName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
