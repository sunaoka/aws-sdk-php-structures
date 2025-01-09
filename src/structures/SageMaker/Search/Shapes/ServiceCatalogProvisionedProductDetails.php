<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProvisionedProductId
 * @property string $ProvisionedProductStatusMessage
 */
class ServiceCatalogProvisionedProductDetails extends Shape
{
    /**
     * @param array{
     *     ProvisionedProductId?: string,
     *     ProvisionedProductStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
