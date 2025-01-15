<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Description
 */
class RecordError extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
