<?php

namespace Sunaoka\Aws\Structures\Schemas\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegistryArn
 * @property string|null $RegistryName
 * @property array<string, string>|null $Tags
 */
class RegistrySummary extends Shape
{
    /**
     * @param array{
     *     RegistryArn?: string|null,
     *     RegistryName?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
