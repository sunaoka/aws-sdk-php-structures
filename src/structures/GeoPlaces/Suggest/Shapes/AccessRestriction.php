<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Restricted
 * @property list<Category>|null $Categories
 */
class AccessRestriction extends Shape
{
    /**
     * @param array{
     *     Restricted?: bool|null,
     *     Categories?: list<Category>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
