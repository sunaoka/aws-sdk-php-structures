<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchDisassociateServiceActionFromProvisioningArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceActionId
 * @property string|null $ProductId
 * @property string|null $ProvisioningArtifactId
 * @property 'DUPLICATE_RESOURCE'|'INTERNAL_FAILURE'|'LIMIT_EXCEEDED'|'RESOURCE_NOT_FOUND'|'THROTTLING'|'INVALID_PARAMETER'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailedServiceActionAssociation extends Shape
{
    /**
     * @param array{
     *     ServiceActionId?: string|null,
     *     ProductId?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     ErrorCode?: 'DUPLICATE_RESOURCE'|'INTERNAL_FAILURE'|'LIMIT_EXCEEDED'|'RESOURCE_NOT_FOUND'|'THROTTLING'|'INVALID_PARAMETER'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
