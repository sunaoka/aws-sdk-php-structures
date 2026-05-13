<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamArn
 * @property string $roleArn
 */
class KinesisTargetDefinition extends Shape
{
    /**
     * @param array{
     *     streamArn: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
