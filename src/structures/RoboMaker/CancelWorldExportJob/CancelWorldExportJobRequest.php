<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelWorldExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class CancelWorldExportJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
