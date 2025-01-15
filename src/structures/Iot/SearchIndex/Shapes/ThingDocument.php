<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingName
 * @property string|null $thingId
 * @property string|null $thingTypeName
 * @property list<string>|null $thingGroupNames
 * @property array<string, string>|null $attributes
 * @property string|null $shadow
 * @property string|null $deviceDefender
 * @property ThingConnectivity|null $connectivity
 */
class ThingDocument extends Shape
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     thingId?: string|null,
     *     thingTypeName?: string|null,
     *     thingGroupNames?: list<string>|null,
     *     attributes?: array<string, string>|null,
     *     shadow?: string|null,
     *     deviceDefender?: string|null,
     *     connectivity?: ThingConnectivity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
