<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMON'|'TARGETED'|null $inspectionLevel
 */
class WafBotControlConfig extends Shape
{
    /**
     * @param array{inspectionLevel?: 'COMMON'|'TARGETED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
