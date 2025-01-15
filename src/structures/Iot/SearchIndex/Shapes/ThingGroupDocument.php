<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingGroupName
 * @property string|null $thingGroupId
 * @property string|null $thingGroupDescription
 * @property array<string, string>|null $attributes
 * @property list<string>|null $parentGroupNames
 */
class ThingGroupDocument extends Shape
{
    /**
     * @param array{
     *     thingGroupName?: string|null,
     *     thingGroupId?: string|null,
     *     thingGroupDescription?: string|null,
     *     attributes?: array<string, string>|null,
     *     parentGroupNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
