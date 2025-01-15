<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberFabricLogPublishingConfiguration|null $Fabric
 */
class MemberLogPublishingConfiguration extends Shape
{
    /**
     * @param array{Fabric?: MemberFabricLogPublishingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
