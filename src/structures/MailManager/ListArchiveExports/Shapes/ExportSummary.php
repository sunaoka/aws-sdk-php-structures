<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExportId
 * @property ExportStatus|null $Status
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     ExportId?: string|null,
     *     Status?: ExportStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
