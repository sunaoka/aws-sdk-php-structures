<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_OR_UPDATE'|'DELETE' $ObjectAttributeActionType
 * @property TypedAttributeValue $ObjectAttributeUpdateValue
 */
class ObjectAttributeAction extends Shape
{
    /**
     * @param array{
     *     ObjectAttributeActionType?: 'CREATE_OR_UPDATE'|'DELETE',
     *     ObjectAttributeUpdateValue?: TypedAttributeValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
