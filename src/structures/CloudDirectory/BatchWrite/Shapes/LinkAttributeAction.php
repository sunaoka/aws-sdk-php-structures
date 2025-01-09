<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_OR_UPDATE'|'DELETE' $AttributeActionType
 * @property TypedAttributeValue $AttributeUpdateValue
 */
class LinkAttributeAction extends Shape
{
    /**
     * @param array{
     *     AttributeActionType?: 'CREATE_OR_UPDATE'|'DELETE',
     *     AttributeUpdateValue?: TypedAttributeValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
