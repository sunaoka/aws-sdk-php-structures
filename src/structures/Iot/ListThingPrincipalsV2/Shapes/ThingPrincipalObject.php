<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingPrincipalsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principal
 * @property 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING' $thingPrincipalType
 */
class ThingPrincipalObject extends Shape
{
    /**
     * @param array{
     *     principal: string,
     *     thingPrincipalType?: 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
