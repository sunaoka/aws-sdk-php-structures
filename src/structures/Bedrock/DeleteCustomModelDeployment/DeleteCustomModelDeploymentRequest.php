<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteCustomModelDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customModelDeploymentIdentifier
 */
class DeleteCustomModelDeploymentRequest extends Request
{
    /**
     * @param array{customModelDeploymentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
