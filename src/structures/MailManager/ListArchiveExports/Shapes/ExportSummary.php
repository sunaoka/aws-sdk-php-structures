<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportId
 * @property ExportStatus $Status
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     ExportId?: string,
     *     Status?: ExportStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
