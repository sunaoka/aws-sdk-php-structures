<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class DescribeWorldExportJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
