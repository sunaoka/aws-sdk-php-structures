<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberFabricConfiguration $Fabric
 */
class MemberFrameworkConfiguration extends Shape
{
    /**
     * @param array{Fabric?: MemberFabricConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
