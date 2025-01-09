<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Restricted
 * @property list<Category> $Categories
 */
class AccessRestriction extends Shape
{
    /**
     * @param array{
     *     Restricted?: bool,
     *     Categories?: list<Category>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
