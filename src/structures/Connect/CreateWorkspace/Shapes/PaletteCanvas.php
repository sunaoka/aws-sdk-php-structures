<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerBackground
 * @property string|null $PageBackground
 * @property string|null $ActiveBackground
 */
class PaletteCanvas extends Shape
{
    /**
     * @param array{
     *     ContainerBackground?: string|null,
     *     PageBackground?: string|null,
     *     ActiveBackground?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
