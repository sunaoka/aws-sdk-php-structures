<?php

namespace Sunaoka\Aws\Structures\Iot\ListThings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 * @property string $thingTypeName
 * @property string $thingArn
 * @property array<string, string> $attributes
 * @property int $version
 */
class ThingAttribute extends Shape
{
    /**
     * @param array{
     *     thingName?: string,
     *     thingTypeName?: string,
     *     thingArn?: string,
     *     attributes?: array<string, string>,
     *     version?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
