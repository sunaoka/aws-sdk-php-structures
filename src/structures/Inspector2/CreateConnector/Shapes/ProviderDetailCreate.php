<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureProviderDetailCreate|null $azure
 * @property GcpProviderDetailCreate|null $gcp
 */
class ProviderDetailCreate extends Shape
{
    /**
     * @param array{
     *     azure?: AzureProviderDetailCreate|null,
     *     gcp?: GcpProviderDetailCreate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
