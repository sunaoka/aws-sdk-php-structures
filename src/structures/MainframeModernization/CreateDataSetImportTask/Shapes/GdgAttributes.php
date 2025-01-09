<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $limit
 * @property string $rollDisposition
 */
class GdgAttributes extends Shape
{
    /**
     * @param array{
     *     limit?: int,
     *     rollDisposition?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
