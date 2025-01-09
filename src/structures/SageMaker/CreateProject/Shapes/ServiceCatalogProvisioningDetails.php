<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string $PathId
 * @property list<ProvisioningParameter> $ProvisioningParameters
 */
class ServiceCatalogProvisioningDetails extends Shape
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProvisioningArtifactId?: string,
     *     PathId?: string,
     *     ProvisioningParameters?: list<ProvisioningParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
