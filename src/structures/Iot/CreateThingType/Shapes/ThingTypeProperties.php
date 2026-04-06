<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingTypeDescription
 * @property list<string>|null $searchableAttributes
 */
class ThingTypeProperties extends Shape
{
    /**
     * @param array{
     *     thingTypeDescription?: string|null,
     *     searchableAttributes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
