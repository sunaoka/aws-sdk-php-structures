<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 * @property 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'|null $thingPrincipalType
 */
class PrincipalThingObject extends Shape
{
    /**
     * @param array{
     *     thingName: string,
     *     thingPrincipalType?: 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
