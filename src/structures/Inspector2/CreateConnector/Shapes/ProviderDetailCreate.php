<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureProviderDetailCreate|null $azure
 */
class ProviderDetailCreate extends Shape
{
    /**
     * @param array{azure?: AzureProviderDetailCreate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
