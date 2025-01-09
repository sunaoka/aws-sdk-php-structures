<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property string $AccessString
 * @property list<string> $ACLNames
 * @property string $MinimumEngineVersion
 * @property Authentication $Authentication
 * @property string $ARN
 */
class User extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string,
     *     AccessString?: string,
     *     ACLNames?: list<string>,
     *     MinimumEngineVersion?: string,
     *     Authentication?: Authentication,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
