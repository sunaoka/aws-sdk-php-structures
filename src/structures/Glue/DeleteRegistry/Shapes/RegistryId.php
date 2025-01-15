<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegistryName
 * @property string|null $RegistryArn
 */
class RegistryId extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string|null,
     *     RegistryArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
