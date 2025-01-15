<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUDFORMATION_STACK_INACTIVE'|'CLOUDFORMATION_STACK_NOT_EXISTING'|'CLOUDFORMATION_STACK_UNASSUMABLE_ROLE'|'RESOURCE_TYPE_NOT_SUPPORTED'|null $ErrorCode
 * @property string|null $Message
 */
class QueryError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'CLOUDFORMATION_STACK_INACTIVE'|'CLOUDFORMATION_STACK_NOT_EXISTING'|'CLOUDFORMATION_STACK_UNASSUMABLE_ROLE'|'RESOURCE_TYPE_NOT_SUPPORTED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
