<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Email
 * @property string $Name
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Email?: string,
     *     Name?: string,
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
