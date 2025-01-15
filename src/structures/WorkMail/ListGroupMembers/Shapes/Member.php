<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'GROUP'|'USER'|null $Type
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 */
class Member extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Type?: 'GROUP'|'USER'|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null,
     *     EnabledDate?: \Aws\Api\DateTimeResult|null,
     *     DisabledDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
