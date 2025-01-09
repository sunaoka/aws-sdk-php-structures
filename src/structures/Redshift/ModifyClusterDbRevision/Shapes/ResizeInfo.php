<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterDbRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResizeType
 * @property bool $AllowCancelResize
 */
class ResizeInfo extends Shape
{
    /**
     * @param array{
     *     ResizeType?: string,
     *     AllowCancelResize?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
