<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'action-required'|'active'|'create-failed'|'create-in-progress'|'deleted'|'delete-in-progress'|'update-in-progress'|'cancel-update-in-progress' $code
 * @property list<ProxyStatusReason> $reasons
 */
class ProxyStatus extends Shape
{
    /**
     * @param array{
     *     code: 'action-required'|'active'|'create-failed'|'create-in-progress'|'deleted'|'delete-in-progress'|'update-in-progress'|'cancel-update-in-progress',
     *     reasons: list<ProxyStatusReason>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
