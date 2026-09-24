<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HORIZON'|'TIMESTAMP' $PointType
 * @property \Aws\Api\DateTimeResult|null $StartingPoint
 * @property \Aws\Api\DateTimeResult|null $EndPoint
 */
class PointInTimeConfiguration extends Shape
{
    /**
     * @param array{
     *     PointType: 'HORIZON'|'TIMESTAMP',
     *     StartingPoint?: \Aws\Api\DateTimeResult|null,
     *     EndPoint?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
