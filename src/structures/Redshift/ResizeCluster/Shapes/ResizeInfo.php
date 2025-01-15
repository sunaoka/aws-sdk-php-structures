<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResizeType
 * @property bool|null $AllowCancelResize
 */
class ResizeInfo extends Shape
{
    /**
     * @param array{
     *     ResizeType?: string|null,
     *     AllowCancelResize?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
