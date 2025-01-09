<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UnassignInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class UnassignInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
