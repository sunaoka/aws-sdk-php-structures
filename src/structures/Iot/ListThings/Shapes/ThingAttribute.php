<?php

namespace Sunaoka\Aws\Structures\Iot\ListThings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingName
 * @property string|null $thingTypeName
 * @property string|null $thingArn
 * @property array<string, string>|null $attributes
 * @property int|null $version
 */
class ThingAttribute extends Shape
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     thingTypeName?: string|null,
     *     thingArn?: string|null,
     *     attributes?: array<string, string>|null,
     *     version?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
