<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBackendEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $stackName
 * @property string|null $deploymentArtifacts
 */
class CreateBackendEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     stackName?: string|null,
     *     deploymentArtifacts?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
