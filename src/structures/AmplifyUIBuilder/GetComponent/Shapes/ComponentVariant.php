<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $variantValues
 * @property array<string, array<string, string>> $overrides
 */
class ComponentVariant extends Shape
{
    /**
     * @param array{
     *     variantValues?: array<string, string>,
     *     overrides?: array<string, array<string, string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
