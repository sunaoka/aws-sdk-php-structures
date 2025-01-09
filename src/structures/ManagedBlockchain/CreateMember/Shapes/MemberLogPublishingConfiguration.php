<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberFabricLogPublishingConfiguration $Fabric
 */
class MemberLogPublishingConfiguration extends Shape
{
    /**
     * @param array{Fabric?: MemberFabricLogPublishingConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
