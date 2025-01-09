<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetOnPremisesInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class GetOnPremisesInstanceRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
