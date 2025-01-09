<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPropertyKey
 * @property string $thingAttribute
 * @property string $connectionAttribute
 */
class PropagatingAttribute extends Shape
{
    /**
     * @param array{
     *     userPropertyKey?: string,
     *     thingAttribute?: string,
     *     connectionAttribute?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
