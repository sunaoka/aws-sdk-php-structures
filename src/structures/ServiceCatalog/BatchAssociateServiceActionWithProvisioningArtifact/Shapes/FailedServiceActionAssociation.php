<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchAssociateServiceActionWithProvisioningArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceActionId
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property 'DUPLICATE_RESOURCE'|'INTERNAL_FAILURE'|'LIMIT_EXCEEDED'|'RESOURCE_NOT_FOUND'|'THROTTLING'|'INVALID_PARAMETER' $ErrorCode
 * @property string $ErrorMessage
 */
class FailedServiceActionAssociation extends Shape
{
    /**
     * @param array{
     *     ServiceActionId?: string,
     *     ProductId?: string,
     *     ProvisioningArtifactId?: string,
     *     ErrorCode?: 'DUPLICATE_RESOURCE'|'INTERNAL_FAILURE'|'LIMIT_EXCEEDED'|'RESOURCE_NOT_FOUND'|'THROTTLING'|'INVALID_PARAMETER',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
