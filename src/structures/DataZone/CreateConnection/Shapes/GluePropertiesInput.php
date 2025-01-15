<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueConnectionInput|null $glueConnectionInput
 */
class GluePropertiesInput extends Shape
{
    /**
     * @param array{glueConnectionInput?: GlueConnectionInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
