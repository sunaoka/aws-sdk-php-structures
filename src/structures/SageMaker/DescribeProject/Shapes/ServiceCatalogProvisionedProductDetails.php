<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProvisionedProductId
 * @property string|null $ProvisionedProductStatusMessage
 */
class ServiceCatalogProvisionedProductDetails extends Shape
{
    /**
     * @param array{
     *     ProvisionedProductId?: string|null,
     *     ProvisionedProductStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
