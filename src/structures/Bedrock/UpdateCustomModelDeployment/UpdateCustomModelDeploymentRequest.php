<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateCustomModelDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelArn
 * @property string $customModelDeploymentIdentifier
 */
class UpdateCustomModelDeploymentRequest extends Request
{
    /**
     * @param array{
     *     modelArn: string,
     *     customModelDeploymentIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
