<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListDeploymentConfigsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
