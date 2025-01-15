<?php

namespace Sunaoka\Aws\Structures\Tnb\ValidateSolFunctionPackageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultValue
 * @property string|null $name
 */
class ToscaOverride extends Shape
{
    /**
     * @param array{
     *     defaultValue?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
