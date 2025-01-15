<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string|null $stageName
 * @property string|null $stageDescription
 * @property string|null $description
 * @property bool|null $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null $cacheClusterSize
 * @property array<string, string>|null $variables
 * @property Shapes\DeploymentCanarySettings|null $canarySettings
 * @property bool|null $tracingEnabled
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName?: string|null,
     *     stageDescription?: string|null,
     *     description?: string|null,
     *     cacheClusterEnabled?: bool|null,
     *     cacheClusterSize?: '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null,
     *     variables?: array<string, string>|null,
     *     canarySettings?: Shapes\DeploymentCanarySettings|null,
     *     tracingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
