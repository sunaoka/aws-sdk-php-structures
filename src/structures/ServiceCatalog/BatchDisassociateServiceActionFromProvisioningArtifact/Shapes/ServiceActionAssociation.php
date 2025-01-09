<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchDisassociateServiceActionFromProvisioningArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceActionId
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 */
class ServiceActionAssociation extends Shape
{
    /**
     * @param array{
     *     ServiceActionId: string,
     *     ProductId: string,
     *     ProvisioningArtifactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
