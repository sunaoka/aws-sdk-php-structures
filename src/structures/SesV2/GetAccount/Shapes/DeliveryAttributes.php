<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GLOBAL'|'REGIONAL'|null $SharedPoolDeliveryMode
 */
class DeliveryAttributes extends Shape
{
    /**
     * @param array{SharedPoolDeliveryMode?: 'GLOBAL'|'REGIONAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
