<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 * @property string $Value
 * @property list<Category> $Categories
 */
class ContactDetails extends Shape
{
    /**
     * @param array{
     *     Label?: string,
     *     Value?: string,
     *     Categories?: list<Category>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
