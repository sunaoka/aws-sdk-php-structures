<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string|null $Value
 */
class MskHeader extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
