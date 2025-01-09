<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'GROUP'|'USER' $Type
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 */
class Member extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Type?: 'GROUP'|'USER',
     *     State?: 'ENABLED'|'DISABLED'|'DELETED',
     *     EnabledDate?: \Aws\Api\DateTimeResult,
     *     DisabledDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
