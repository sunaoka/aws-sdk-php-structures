<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelfManagedLatticeResource|null $selfManagedLatticeResource
 * @property ManagedLatticeResource|null $managedLatticeResource
 */
class PrivateEndpoint extends Shape
{
    /**
     * @param array{
     *     selfManagedLatticeResource?: SelfManagedLatticeResource|null,
     *     managedLatticeResource?: ManagedLatticeResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
