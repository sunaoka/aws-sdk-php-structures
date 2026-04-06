<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportArn
 * @property string $ExportName
 * @property ExportStatus $ExportStatus
 */
class ExportReference extends Shape
{
    /**
     * @param array{
     *     ExportArn: string,
     *     ExportName: string,
     *     ExportStatus: ExportStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
