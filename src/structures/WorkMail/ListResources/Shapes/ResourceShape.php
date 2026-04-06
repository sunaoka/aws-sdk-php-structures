<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Email
 * @property string|null $Name
 * @property 'ROOM'|'EQUIPMENT'|null $Type
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 * @property string|null $Description
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Email?: string|null,
     *     Name?: string|null,
     *     Type?: 'ROOM'|'EQUIPMENT'|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null,
     *     EnabledDate?: \Aws\Api\DateTimeResult|null,
     *     DisabledDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
