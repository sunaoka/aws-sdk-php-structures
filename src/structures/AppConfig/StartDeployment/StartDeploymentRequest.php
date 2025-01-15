<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property string $DeploymentStrategyId
 * @property string $ConfigurationProfileId
 * @property string $ConfigurationVersion
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property string|null $KmsKeyIdentifier
 * @property array<string, string>|null $DynamicExtensionParameters
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
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     KmsKeyIdentifier?: string|null,
     *     DynamicExtensionParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
