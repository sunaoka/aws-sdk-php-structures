<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowCancelResize
 * @property string|null $ResizeType
 */
class AwsRedshiftClusterResizeInfo extends Shape
{
    /**
     * @param array{
     *     AllowCancelResize?: bool|null,
     *     ResizeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
