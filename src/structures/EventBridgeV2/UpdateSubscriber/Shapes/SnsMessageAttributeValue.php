<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataType
 * @property string|null $StringValue
 * @property string|null $BinaryValue
 */
class SnsMessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     DataType?: string|null,
     *     StringValue?: string|null,
     *     BinaryValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
