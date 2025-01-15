<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 */
class ProvisioningParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
