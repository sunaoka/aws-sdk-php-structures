<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property string $deploymentId
 * @property string $description
 * @property bool $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237' $cacheClusterSize
 * @property array<string, string> $variables
 * @property string $documentationVersion
 * @property Shapes\CanarySettings $canarySettings
 * @property bool $tracingEnabled
 * @property array<string, string> $tags
 */
class CreateStageRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string,
     *     deploymentId: string,
     *     description?: string,
     *     cacheClusterEnabled?: bool,
     *     cacheClusterSize?: '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237',
     *     variables?: array<string, string>,
     *     documentationVersion?: string,
     *     canarySettings?: Shapes\CanarySettings,
     *     tracingEnabled?: bool,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
