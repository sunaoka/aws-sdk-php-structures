<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TranslationName> $Names
 * @property 'Alternative'|'Primary'|null $Preference
 */
class AdminNames extends Shape
{
    /**
     * @param array{
     *     Names: list<TranslationName>,
     *     Preference?: 'Alternative'|'Primary'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
