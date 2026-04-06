<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Default
 * @property string|null $Active
 * @property string|null $ContrastText
 */
class PalettePrimary extends Shape
{
    /**
     * @param array{
     *     Default?: string|null,
     *     Active?: string|null,
     *     ContrastText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
