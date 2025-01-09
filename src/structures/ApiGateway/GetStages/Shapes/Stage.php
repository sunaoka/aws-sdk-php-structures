<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $clientCertificateId
 * @property string $stageName
 * @property string $description
 * @property bool $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237' $cacheClusterSize
 * @property 'CREATE_IN_PROGRESS'|'AVAILABLE'|'DELETE_IN_PROGRESS'|'NOT_AVAILABLE'|'FLUSH_IN_PROGRESS' $cacheClusterStatus
 * @property array<string, MethodSetting> $methodSettings
 * @property array<string, string> $variables
 * @property string $documentationVersion
 * @property AccessLogSettings $accessLogSettings
 * @property CanarySettings $canarySettings
 * @property bool $tracingEnabled
 * @property string $webAclArn
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     clientCertificateId?: string,
     *     stageName?: string,
     *     description?: string,
     *     cacheClusterEnabled?: bool,
     *     cacheClusterSize?: '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237',
     *     cacheClusterStatus?: 'CREATE_IN_PROGRESS'|'AVAILABLE'|'DELETE_IN_PROGRESS'|'NOT_AVAILABLE'|'FLUSH_IN_PROGRESS',
     *     methodSettings?: array<string, MethodSetting>,
     *     variables?: array<string, string>,
     *     documentationVersion?: string,
     *     accessLogSettings?: AccessLogSettings,
     *     canarySettings?: CanarySettings,
     *     tracingEnabled?: bool,
     *     webAclArn?: string,
     *     tags?: array<string, string>,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
