<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetStage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $deploymentId
 * @property string $clientCertificateId
 * @property string $stageName
 * @property string $description
 * @property bool $cacheClusterEnabled
 * @property '0.5'|'1.6'|'6.1'|'13.5'|'28.4'|'58.2'|'118'|'237' $cacheClusterSize
 * @property 'CREATE_IN_PROGRESS'|'AVAILABLE'|'DELETE_IN_PROGRESS'|'NOT_AVAILABLE'|'FLUSH_IN_PROGRESS' $cacheClusterStatus
 * @property array<string, Shapes\MethodSetting> $methodSettings
 * @property array<string, string> $variables
 * @property string $documentationVersion
 * @property Shapes\AccessLogSettings $accessLogSettings
 * @property Shapes\CanarySettings $canarySettings
 * @property bool $tracingEnabled
 * @property string $webAclArn
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 */
class GetStageResponse extends Response
{
}
