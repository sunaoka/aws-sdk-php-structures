<?php

namespace Sunaoka\Aws\Structures\Ecs\ListGatewayClusterAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gatewayArn
 * @property string|null $clusterArn
 * @property 'ACTIVE'|'DISASSOCIATING'|'INACTIVE'|null $status
 */
class GatewayClusterAssociationSummary extends Shape
{
    /**
     * @param array{
     *     gatewayArn?: string|null,
     *     clusterArn?: string|null,
     *     status?: 'ACTIVE'|'DISASSOCIATING'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
