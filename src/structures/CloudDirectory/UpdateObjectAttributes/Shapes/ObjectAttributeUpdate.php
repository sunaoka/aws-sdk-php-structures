<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateObjectAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey|null $ObjectAttributeKey
 * @property ObjectAttributeAction|null $ObjectAttributeAction
 */
class ObjectAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     ObjectAttributeKey?: AttributeKey|null,
     *     ObjectAttributeAction?: ObjectAttributeAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
