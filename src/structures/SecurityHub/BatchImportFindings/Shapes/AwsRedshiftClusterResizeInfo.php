<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowCancelResize
 * @property string $ResizeType
 */
class AwsRedshiftClusterResizeInfo extends Shape
{
    /**
     * @param array{
     *     AllowCancelResize?: bool,
     *     ResizeType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
