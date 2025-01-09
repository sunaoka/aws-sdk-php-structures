<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryName
 * @property string $RegistryArn
 */
class RegistryId extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string,
     *     RegistryArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
