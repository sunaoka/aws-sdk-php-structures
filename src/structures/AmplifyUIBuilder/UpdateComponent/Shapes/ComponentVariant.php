<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $variantValues
 * @property array<string, array<string, string>>|null $overrides
 */
class ComponentVariant extends Shape
{
    /**
     * @param array{
     *     variantValues?: array<string, string>|null,
     *     overrides?: array<string, array<string, string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
