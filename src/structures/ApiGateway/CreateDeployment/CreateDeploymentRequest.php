<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property string $stageDescription
 * @property string $description
 * @property bool $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237' $cacheClusterSize
 * @property array<string, string> $variables
 * @property Shapes\DeploymentCanarySettings $canarySettings
 * @property bool $tracingEnabled
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName?: string,
     *     stageDescription?: string,
     *     description?: string,
     *     cacheClusterEnabled?: bool,
     *     cacheClusterSize?: '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237',
     *     variables?: array<string, string>,
     *     canarySettings?: Shapes\DeploymentCanarySettings,
     *     tracingEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
