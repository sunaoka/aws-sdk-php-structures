<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowFleet
 * @property bool $allowImageBuilder
 */
class ImagePermissions extends Shape
{
    /**
     * @param array{
     *     allowFleet?: bool,
     *     allowImageBuilder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
