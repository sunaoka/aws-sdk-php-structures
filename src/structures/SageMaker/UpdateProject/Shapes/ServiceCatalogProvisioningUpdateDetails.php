<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProvisioningArtifactId
 * @property list<ProvisioningParameter>|null $ProvisioningParameters
 */
class ServiceCatalogProvisioningUpdateDetails extends Shape
{
    /**
     * @param array{
     *     ProvisioningArtifactId?: string|null,
     *     ProvisioningParameters?: list<ProvisioningParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
