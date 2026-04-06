<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING'|null $Status
 * @property 'DISABLED'|'ENABLED'|null $PlayerGatewayStatus
 */
class ContainerFleetLocationAttributes extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     Status?: 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING'|null,
     *     PlayerGatewayStatus?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
