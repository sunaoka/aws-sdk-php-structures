<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\SkipWaitTimeForInstanceTermination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 */
class SkipWaitTimeForInstanceTerminationRequest extends Request
{
    /**
     * @param array{deploymentId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
