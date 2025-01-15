<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userPropertyKey
 * @property string|null $thingAttribute
 * @property string|null $connectionAttribute
 */
class PropagatingAttribute extends Shape
{
    /**
     * @param array{
     *     userPropertyKey?: string|null,
     *     thingAttribute?: string|null,
     *     connectionAttribute?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
