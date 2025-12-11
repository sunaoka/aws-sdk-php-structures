<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImportedImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IntendedInstanceType
 */
class RuntimeValidationConfig extends Shape
{
    /**
     * @param array{IntendedInstanceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
