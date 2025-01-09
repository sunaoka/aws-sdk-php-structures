<?php

namespace Sunaoka\Aws\Structures\LocationService\CreatePlaceIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SingleUse'|'Storage' $IntendedUse
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{IntendedUse?: 'SingleUse'|'Storage'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
