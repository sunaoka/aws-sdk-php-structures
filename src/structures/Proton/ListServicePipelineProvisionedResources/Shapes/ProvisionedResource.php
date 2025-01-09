<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineProvisionedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $name
 * @property 'CLOUDFORMATION'|'TERRAFORM' $provisioningEngine
 */
class ProvisionedResource extends Shape
{
    /**
     * @param array{
     *     identifier?: string,
     *     name?: string,
     *     provisioningEngine?: 'CLOUDFORMATION'|'TERRAFORM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
