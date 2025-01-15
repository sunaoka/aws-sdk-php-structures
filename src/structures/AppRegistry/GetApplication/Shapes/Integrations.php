<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceGroup|null $resourceGroup
 * @property ResourceGroup|null $applicationTagResourceGroup
 */
class Integrations extends Shape
{
    /**
     * @param array{
     *     resourceGroup?: ResourceGroup|null,
     *     applicationTagResourceGroup?: ResourceGroup|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
