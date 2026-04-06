<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueConnectionPatch|null $glueConnectionInput
 */
class GluePropertiesPatch extends Shape
{
    /**
     * @param array{glueConnectionInput?: GlueConnectionPatch|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
