<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\DeleteExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 */
class DeleteExportRequest extends Request
{
    /**
     * @param array{ExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
