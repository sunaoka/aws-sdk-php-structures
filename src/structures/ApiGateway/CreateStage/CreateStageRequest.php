<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property string $deploymentId
 * @property string|null $description
 * @property bool|null $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null $cacheClusterSize
 * @property array<string, string>|null $variables
 * @property string|null $documentationVersion
 * @property Shapes\CanarySettings|null $canarySettings
 * @property bool|null $tracingEnabled
 * @property array<string, string>|null $tags
 */
class CreateStageRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string,
     *     deploymentId: string,
     *     description?: string|null,
     *     cacheClusterEnabled?: bool|null,
     *     cacheClusterSize?: '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null,
     *     variables?: array<string, string>|null,
     *     documentationVersion?: string|null,
     *     canarySettings?: Shapes\CanarySettings|null,
     *     tracingEnabled?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
