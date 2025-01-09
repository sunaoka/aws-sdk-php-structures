<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceGroup $resourceGroup
 * @property ResourceGroup $applicationTagResourceGroup
 */
class Integrations extends Shape
{
    /**
     * @param array{
     *     resourceGroup?: ResourceGroup,
     *     applicationTagResourceGroup?: ResourceGroup
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
