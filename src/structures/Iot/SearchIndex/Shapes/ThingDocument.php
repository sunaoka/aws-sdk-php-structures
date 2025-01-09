<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 * @property string $thingId
 * @property string $thingTypeName
 * @property list<string> $thingGroupNames
 * @property array<string, string> $attributes
 * @property string $shadow
 * @property string $deviceDefender
 * @property ThingConnectivity $connectivity
 */
class ThingDocument extends Shape
{
    /**
     * @param array{
     *     thingName?: string,
     *     thingId?: string,
     *     thingTypeName?: string,
     *     thingGroupNames?: list<string>,
     *     attributes?: array<string, string>,
     *     shadow?: string,
     *     deviceDefender?: string,
     *     connectivity?: ThingConnectivity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
