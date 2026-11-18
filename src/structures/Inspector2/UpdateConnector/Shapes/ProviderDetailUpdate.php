<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureProviderDetailUpdate|null $azure
 * @property GcpProviderDetailUpdate|null $gcp
 */
class ProviderDetailUpdate extends Shape
{
    /**
     * @param array{
     *     azure?: AzureProviderDetailUpdate|null,
     *     gcp?: GcpProviderDetailUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
