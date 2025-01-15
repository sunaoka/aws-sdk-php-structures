<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateLinkAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_OR_UPDATE'|'DELETE'|null $AttributeActionType
 * @property TypedAttributeValue|null $AttributeUpdateValue
 */
class LinkAttributeAction extends Shape
{
    /**
     * @param array{
     *     AttributeActionType?: 'CREATE_OR_UPDATE'|'DELETE'|null,
     *     AttributeUpdateValue?: TypedAttributeValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
