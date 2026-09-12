<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvoiceConfiguration|null $InvoiceConfiguration
 */
class FeatureConfigurations extends Shape
{
    /**
     * @param array{InvoiceConfiguration?: InvoiceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
