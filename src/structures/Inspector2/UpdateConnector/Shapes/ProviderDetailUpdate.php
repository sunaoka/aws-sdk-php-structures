<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureProviderDetailUpdate|null $azure
 */
class ProviderDetailUpdate extends Shape
{
    /**
     * @param array{azure?: AzureProviderDetailUpdate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
