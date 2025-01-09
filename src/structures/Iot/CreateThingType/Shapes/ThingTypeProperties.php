<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingTypeDescription
 * @property list<string> $searchableAttributes
 * @property Mqtt5Configuration $mqtt5Configuration
 */
class ThingTypeProperties extends Shape
{
    /**
     * @param array{
     *     thingTypeDescription?: string,
     *     searchableAttributes?: list<string>,
     *     mqtt5Configuration?: Mqtt5Configuration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
