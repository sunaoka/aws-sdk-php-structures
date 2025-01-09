<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteComputeEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computeEnvironment
 */
class DeleteComputeEnvironmentRequest extends Request
{
    /**
     * @param array{computeEnvironment: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
