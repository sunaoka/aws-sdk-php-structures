<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $MultiLine
 */
class JsonOptions extends Shape
{
    /**
     * @param array{MultiLine?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
