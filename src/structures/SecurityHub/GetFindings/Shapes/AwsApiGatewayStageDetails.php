<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeploymentId
 * @property string $ClientCertificateId
 * @property string $StageName
 * @property string $Description
 * @property bool $CacheClusterEnabled
 * @property string $CacheClusterSize
 * @property string $CacheClusterStatus
 * @property list<AwsApiGatewayMethodSettings> $MethodSettings
 * @property array<string, string> $Variables
 * @property string $DocumentationVersion
 * @property AwsApiGatewayAccessLogSettings $AccessLogSettings
 * @property AwsApiGatewayCanarySettings $CanarySettings
 * @property bool $TracingEnabled
 * @property string $CreatedDate
 * @property string $LastUpdatedDate
 * @property string $WebAclArn
 */
class AwsApiGatewayStageDetails extends Shape
{
    /**
     * @param array{
     *     DeploymentId?: string,
     *     ClientCertificateId?: string,
     *     StageName?: string,
     *     Description?: string,
     *     CacheClusterEnabled?: bool,
     *     CacheClusterSize?: string,
     *     CacheClusterStatus?: string,
     *     MethodSettings?: list<AwsApiGatewayMethodSettings>,
     *     Variables?: array<string, string>,
     *     DocumentationVersion?: string,
     *     AccessLogSettings?: AwsApiGatewayAccessLogSettings,
     *     CanarySettings?: AwsApiGatewayCanarySettings,
     *     TracingEnabled?: bool,
     *     CreatedDate?: string,
     *     LastUpdatedDate?: string,
     *     WebAclArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
