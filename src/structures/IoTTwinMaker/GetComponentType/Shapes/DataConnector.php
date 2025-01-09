<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaFunction $lambda
 * @property bool $isNative
 */
class DataConnector extends Shape
{
    /**
     * @param array{
     *     lambda?: LambdaFunction,
     *     isNative?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
