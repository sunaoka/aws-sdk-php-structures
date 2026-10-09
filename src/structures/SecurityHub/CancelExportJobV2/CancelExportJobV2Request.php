<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CancelExportJobV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportJobId
 */
class CancelExportJobV2Request extends Request
{
    /**
     * @param array{ExportJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
