<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterCodeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string|null $clientToken
 * @property Shapes\CodeConfiguration $code
 * @property string|null $initializationScript
 * @property list<Shapes\KxCommandLineArgument>|null $commandLineArguments
 * @property Shapes\KxClusterCodeDeploymentConfiguration|null $deploymentConfiguration
 */
class UpdateKxClusterCodeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     clientToken?: string|null,
     *     code: Shapes\CodeConfiguration,
     *     initializationScript?: string|null,
     *     commandLineArguments?: list<Shapes\KxCommandLineArgument>|null,
     *     deploymentConfiguration?: Shapes\KxClusterCodeDeploymentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
