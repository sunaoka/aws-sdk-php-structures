<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelfManagedLatticeResource|null $selfManagedLatticeResource
 * @property ManagedVpcResource|null $managedVpcResource
 */
class PrivateEndpoint extends Shape
{
    /**
     * @param array{
     *     selfManagedLatticeResource?: SelfManagedLatticeResource|null,
     *     managedVpcResource?: ManagedVpcResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
