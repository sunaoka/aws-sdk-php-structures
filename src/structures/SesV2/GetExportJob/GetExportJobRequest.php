<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetExportJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
