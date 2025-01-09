<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingGroupName
 * @property string $thingGroupId
 * @property string $thingGroupDescription
 * @property array<string, string> $attributes
 * @property list<string> $parentGroupNames
 */
class ThingGroupDocument extends Shape
{
    /**
     * @param array{
     *     thingGroupName?: string,
     *     thingGroupId?: string,
     *     thingGroupDescription?: string,
     *     attributes?: array<string, string>,
     *     parentGroupNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
