<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowFleet
 * @property bool|null $allowImageBuilder
 */
class ImagePermissions extends Shape
{
    /**
     * @param array{
     *     allowFleet?: bool|null,
     *     allowImageBuilder?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
