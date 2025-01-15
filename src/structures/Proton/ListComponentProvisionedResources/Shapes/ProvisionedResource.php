<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentProvisionedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property string|null $name
 * @property 'CLOUDFORMATION'|'TERRAFORM'|null $provisioningEngine
 */
class ProvisionedResource extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     name?: string|null,
     *     provisioningEngine?: 'CLOUDFORMATION'|'TERRAFORM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
