<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\TerminateProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Description
 */
class RecordError extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
