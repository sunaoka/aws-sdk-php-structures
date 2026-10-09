<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetExportJobV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportJobId
 */
class GetExportJobV2Request extends Request
{
    /**
     * @param array{ExportJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
