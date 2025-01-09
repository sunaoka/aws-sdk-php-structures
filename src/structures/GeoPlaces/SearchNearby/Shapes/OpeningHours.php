<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Display
 * @property bool $OpenNow
 * @property list<OpeningHoursComponents> $Components
 * @property list<Category> $Categories
 */
class OpeningHours extends Shape
{
    /**
     * @param array{
     *     Display?: list<string>,
     *     OpenNow?: bool,
     *     Components?: list<OpeningHoursComponents>,
     *     Categories?: list<Category>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
