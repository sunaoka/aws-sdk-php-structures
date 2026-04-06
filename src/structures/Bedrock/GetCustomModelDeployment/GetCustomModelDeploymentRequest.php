<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModelDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customModelDeploymentIdentifier
 */
class GetCustomModelDeploymentRequest extends Request
{
    /**
     * @param array{customModelDeploymentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
