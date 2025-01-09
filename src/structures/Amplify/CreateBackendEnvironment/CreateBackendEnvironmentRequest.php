<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBackendEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $stackName
 * @property string $deploymentArtifacts
 */
class CreateBackendEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     stackName?: string,
     *     deploymentArtifacts?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
