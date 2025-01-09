<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterCodeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string $clientToken
 * @property Shapes\CodeConfiguration $code
 * @property string $initializationScript
 * @property list<Shapes\KxCommandLineArgument> $commandLineArguments
 * @property Shapes\KxClusterCodeDeploymentConfiguration $deploymentConfiguration
 */
class UpdateKxClusterCodeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     clientToken?: string,
     *     code: Shapes\CodeConfiguration,
     *     initializationScript?: string,
     *     commandLineArguments?: list<Shapes\KxCommandLineArgument>,
     *     deploymentConfiguration?: Shapes\KxClusterCodeDeploymentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
