<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberFabricAttributes $Fabric
 */
class MemberFrameworkAttributes extends Shape
{
    /**
     * @param array{Fabric?: MemberFabricAttributes} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
