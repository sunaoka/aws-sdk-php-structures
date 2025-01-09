<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeregisterOnPremisesInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class DeregisterOnPremisesInstanceRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
