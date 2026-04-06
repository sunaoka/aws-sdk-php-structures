<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 * @property string|null $Value
 * @property list<Category>|null $Categories
 */
class ContactDetails extends Shape
{
    /**
     * @param array{
     *     Label?: string|null,
     *     Value?: string|null,
     *     Categories?: list<Category>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
