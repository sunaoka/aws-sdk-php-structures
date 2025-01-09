<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class DescribeWorldGenerationJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
