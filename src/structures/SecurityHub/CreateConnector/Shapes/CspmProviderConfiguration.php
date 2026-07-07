<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureProviderConfiguration|null $Azure
 */
class CspmProviderConfiguration extends Shape
{
    /**
     * @param array{Azure?: AzureProviderConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
