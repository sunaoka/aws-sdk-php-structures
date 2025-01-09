<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueConnectionInput $glueConnectionInput
 */
class GluePropertiesInput extends Shape
{
    /**
     * @param array{glueConnectionInput?: GlueConnectionInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
