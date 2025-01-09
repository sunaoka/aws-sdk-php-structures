<?php

namespace Sunaoka\Aws\Structures\Schemas\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryArn
 * @property string $RegistryName
 * @property array<string, string> $Tags
 */
class RegistrySummary extends Shape
{
    /**
     * @param array{
     *     RegistryArn?: string,
     *     RegistryName?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
