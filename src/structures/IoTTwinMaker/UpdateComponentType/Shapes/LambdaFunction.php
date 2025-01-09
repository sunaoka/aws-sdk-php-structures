<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class LambdaFunction extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
