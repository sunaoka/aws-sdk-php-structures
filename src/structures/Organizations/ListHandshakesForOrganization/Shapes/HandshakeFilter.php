<?php

namespace Sunaoka\Aws\Structures\Organizations\ListHandshakesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'|null $ActionType
 * @property string|null $ParentHandshakeId
 */
class HandshakeFilter extends Shape
{
    /**
     * @param array{
     *     ActionType?: 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'|null,
     *     ParentHandshakeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
