<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateStage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $deploymentId
 * @property string|null $clientCertificateId
 * @property string|null $stageName
 * @property string|null $description
 * @property bool|null $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237'|null $cacheClusterSize
 * @property 'CREATE_IN_PROGRESS'|'AVAILABLE'|'DELETE_IN_PROGRESS'|'NOT_AVAILABLE'|'FLUSH_IN_PROGRESS'|null $cacheClusterStatus
 * @property array<string, Shapes\MethodSetting>|null $methodSettings
 * @property array<string, string>|null $variables
 * @property string|null $documentationVersion
 * @property Shapes\AccessLogSettings|null $accessLogSettings
 * @property Shapes\CanarySettings|null $canarySettings
 * @property bool|null $tracingEnabled
 * @property string|null $webAclArn
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 */
class UpdateStageResponse extends Response
{
}
