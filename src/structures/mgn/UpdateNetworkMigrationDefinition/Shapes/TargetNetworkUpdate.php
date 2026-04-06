<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ISOLATED_VPC'|'HUB_AND_SPOKE'|null $topology
 * @property string|null $inboundCidr
 * @property string|null $outboundCidr
 * @property string|null $inspectionCidr
 */
class TargetNetworkUpdate extends Shape
{
    /**
     * @param array{
     *     topology?: 'ISOLATED_VPC'|'HUB_AND_SPOKE'|null,
     *     inboundCidr?: string|null,
     *     outboundCidr?: string|null,
     *     inspectionCidr?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
