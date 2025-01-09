<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Email
 * @property string $Name
 * @property 'ROOM'|'EQUIPMENT' $Type
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 * @property string $Description
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Email?: string,
     *     Name?: string,
     *     Type?: 'ROOM'|'EQUIPMENT',
     *     State?: 'ENABLED'|'DISABLED'|'DELETED',
     *     EnabledDate?: \Aws\Api\DateTimeResult,
     *     DisabledDate?: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
