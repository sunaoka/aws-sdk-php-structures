<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportId
 */
class GetArchiveExportRequest extends Request
{
    /**
     * @param array{ExportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
