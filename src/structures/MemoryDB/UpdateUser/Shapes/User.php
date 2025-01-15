<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $AccessString
 * @property list<string>|null $ACLNames
 * @property string|null $MinimumEngineVersion
 * @property Authentication|null $Authentication
 * @property string|null $ARN
 */
class User extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null,
     *     AccessString?: string|null,
     *     ACLNames?: list<string>|null,
     *     MinimumEngineVersion?: string|null,
     *     Authentication?: Authentication|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
