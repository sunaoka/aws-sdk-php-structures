<?php

namespace Sunaoka\Aws\Structures\SesV2\CancelExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class CancelExportJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
