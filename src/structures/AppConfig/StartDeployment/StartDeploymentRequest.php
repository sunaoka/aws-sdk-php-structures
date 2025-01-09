<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property string $DeploymentStrategyId
 * @property string $ConfigurationProfileId
 * @property string $ConfigurationVersion
 * @property string $Description
 * @property array<string, string> $Tags
 * @property string $KmsKeyIdentifier
 * @property array<string, string> $DynamicExtensionParameters
 */
class StartDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string,
     *     DeploymentStrategyId: string,
     *     ConfigurationProfileId: string,
     *     ConfigurationVersion: string,
     *     Description?: string,
     *     Tags?: array<string, string>,
     *     KmsKeyIdentifier?: string,
     *     DynamicExtensionParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
