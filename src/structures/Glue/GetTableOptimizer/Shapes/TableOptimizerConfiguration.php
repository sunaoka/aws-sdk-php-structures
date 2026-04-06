<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleArn
 * @property bool|null $enabled
 */
class TableOptimizerConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
