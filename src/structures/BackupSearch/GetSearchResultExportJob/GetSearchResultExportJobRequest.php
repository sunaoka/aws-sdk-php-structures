<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchResultExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportJobIdentifier
 */
class GetSearchResultExportJobRequest extends Request
{
    /**
     * @param array{ExportJobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
