<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Display
 * @property bool|null $OpenNow
 * @property list<OpeningHoursComponents>|null $Components
 * @property list<Category>|null $Categories
 */
class OpeningHours extends Shape
{
    /**
     * @param array{
     *     Display?: list<string>|null,
     *     OpenNow?: bool|null,
     *     Components?: list<OpeningHoursComponents>|null,
     *     Categories?: list<Category>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
