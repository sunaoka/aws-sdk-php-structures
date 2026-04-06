<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelDeploymentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class CancelDeploymentJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
