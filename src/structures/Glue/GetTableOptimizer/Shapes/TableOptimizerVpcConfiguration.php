<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $glueConnectionName
 */
class TableOptimizerVpcConfiguration extends Shape
{
    /**
     * @param array{glueConnectionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
