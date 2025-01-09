<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueConnectionPatch $glueConnectionInput
 */
class GluePropertiesPatch extends Shape
{
    /**
     * @param array{glueConnectionInput?: GlueConnectionPatch} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
