<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetOnPremisesInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceNames
 */
class BatchGetOnPremisesInstancesRequest extends Request
{
    /**
     * @param array{instanceNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
