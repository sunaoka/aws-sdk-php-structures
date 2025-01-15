<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentId
 * @property string|null $clientCertificateId
 * @property string|null $stageName
 * @property string|null $description
 * @property bool|null $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null $cacheClusterSize
 * @property 'CREATE_IN_PROGRESS'|'AVAILABLE'|'DELETE_IN_PROGRESS'|'NOT_AVAILABLE'|'FLUSH_IN_PROGRESS'|null $cacheClusterStatus
 * @property array<string, MethodSetting>|null $methodSettings
 * @property array<string, string>|null $variables
 * @property string|null $documentationVersion
 * @property AccessLogSettings|null $accessLogSettings
 * @property CanarySettings|null $canarySettings
 * @property bool|null $tracingEnabled
 * @property string|null $webAclArn
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     clientCertificateId?: string|null,
     *     stageName?: string|null,
     *     description?: string|null,
     *     cacheClusterEnabled?: bool|null,
     *     cacheClusterSize?: '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null,
     *     cacheClusterStatus?: 'CREATE_IN_PROGRESS'|'AVAILABLE'|'DELETE_IN_PROGRESS'|'NOT_AVAILABLE'|'FLUSH_IN_PROGRESS'|null,
     *     methodSettings?: array<string, MethodSetting>|null,
     *     variables?: array<string, string>|null,
     *     documentationVersion?: string|null,
     *     accessLogSettings?: AccessLogSettings|null,
     *     canarySettings?: CanarySettings|null,
     *     tracingEnabled?: bool|null,
     *     webAclArn?: string|null,
     *     tags?: array<string, string>|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
