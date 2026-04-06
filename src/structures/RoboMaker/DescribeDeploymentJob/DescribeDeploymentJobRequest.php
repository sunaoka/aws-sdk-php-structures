<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeDeploymentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class DescribeDeploymentJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
