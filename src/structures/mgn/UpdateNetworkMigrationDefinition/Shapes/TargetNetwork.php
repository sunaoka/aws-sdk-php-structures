<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ISOLATED_VPC'|'HUB_AND_SPOKE' $topology
 * @property string|null $inboundCidr
 * @property string|null $outboundCidr
 * @property string|null $inspectionCidr
 */
class TargetNetwork extends Shape
{
    /**
     * @param array{
     *     topology: 'ISOLATED_VPC'|'HUB_AND_SPOKE',
     *     inboundCidr?: string|null,
     *     outboundCidr?: string|null,
     *     inspectionCidr?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
