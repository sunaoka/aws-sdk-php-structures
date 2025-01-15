<?php

namespace Sunaoka\Aws\Structures\LocationService\CreatePlaceIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SingleUse'|'Storage'|null $IntendedUse
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{IntendedUse?: 'SingleUse'|'Storage'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
