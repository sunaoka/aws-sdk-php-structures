<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property string|null $ProvisioningArtifactId
 * @property string|null $PathId
 * @property list<ProvisioningParameter>|null $ProvisioningParameters
 */
class ServiceCatalogProvisioningDetails extends Shape
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProvisioningArtifactId?: string|null,
     *     PathId?: string|null,
     *     ProvisioningParameters?: list<ProvisioningParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
