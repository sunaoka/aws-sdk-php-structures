<?php

namespace Sunaoka\Aws\Structures\Organizations\ListHandshakesForAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE' $ActionType
 * @property string $ParentHandshakeId
 */
class HandshakeFilter extends Shape
{
    /**
     * @param array{
     *     ActionType?: 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE',
     *     ParentHandshakeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
