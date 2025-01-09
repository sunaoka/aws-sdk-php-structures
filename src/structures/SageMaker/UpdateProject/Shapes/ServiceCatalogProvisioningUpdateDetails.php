<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProvisioningArtifactId
 * @property list<ProvisioningParameter> $ProvisioningParameters
 */
class ServiceCatalogProvisioningUpdateDetails extends Shape
{
    /**
     * @param array{
     *     ProvisioningArtifactId?: string,
     *     ProvisioningParameters?: list<ProvisioningParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
