<?php

namespace Sunaoka\Aws\Structures\MailManager\StopArchiveExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportId
 */
class StopArchiveExportRequest extends Request
{
    /**
     * @param array{ExportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
