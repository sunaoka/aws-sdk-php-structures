<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RebootInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class RebootInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
