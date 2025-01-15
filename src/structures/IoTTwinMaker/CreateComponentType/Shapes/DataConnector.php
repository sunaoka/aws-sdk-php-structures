<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaFunction|null $lambda
 * @property bool|null $isNative
 */
class DataConnector extends Shape
{
    /**
     * @param array{
     *     lambda?: LambdaFunction|null,
     *     isNative?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
