<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 */
class GetExportRequest extends Request
{
    /**
     * @param array{ExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
