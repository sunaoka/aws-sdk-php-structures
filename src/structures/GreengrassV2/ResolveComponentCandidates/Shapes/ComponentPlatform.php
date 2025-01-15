<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property array<string, string>|null $attributes
 */
class ComponentPlatform extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
