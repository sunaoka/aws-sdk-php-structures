<?php

namespace Sunaoka\Aws\Structures\DSQL\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisTargetDefinition|null $kinesis
 */
class TargetDefinition extends Shape
{
    /**
     * @param array{kinesis?: KinesisTargetDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
