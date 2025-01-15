<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberFabricConfiguration|null $Fabric
 */
class MemberFrameworkConfiguration extends Shape
{
    /**
     * @param array{Fabric?: MemberFabricConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
