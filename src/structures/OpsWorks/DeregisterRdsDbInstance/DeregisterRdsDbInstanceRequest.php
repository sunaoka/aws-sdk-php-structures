<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterRdsDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RdsDbInstanceArn
 */
class DeregisterRdsDbInstanceRequest extends Request
{
    /**
     * @param array{RdsDbInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
