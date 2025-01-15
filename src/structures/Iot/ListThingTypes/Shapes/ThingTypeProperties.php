<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingTypeDescription
 * @property list<string>|null $searchableAttributes
 * @property Mqtt5Configuration|null $mqtt5Configuration
 */
class ThingTypeProperties extends Shape
{
    /**
     * @param array{
     *     thingTypeDescription?: string|null,
     *     searchableAttributes?: list<string>|null,
     *     mqtt5Configuration?: Mqtt5Configuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
