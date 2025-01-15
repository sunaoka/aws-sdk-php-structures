<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeploymentId
 * @property string|null $ClientCertificateId
 * @property string|null $StageName
 * @property string|null $Description
 * @property bool|null $CacheClusterEnabled
 * @property string|null $CacheClusterSize
 * @property string|null $CacheClusterStatus
 * @property list<AwsApiGatewayMethodSettings>|null $MethodSettings
 * @property array<string, string>|null $Variables
 * @property string|null $DocumentationVersion
 * @property AwsApiGatewayAccessLogSettings|null $AccessLogSettings
 * @property AwsApiGatewayCanarySettings|null $CanarySettings
 * @property bool|null $TracingEnabled
 * @property string|null $CreatedDate
 * @property string|null $LastUpdatedDate
 * @property string|null $WebAclArn
 */
class AwsApiGatewayStageDetails extends Shape
{
    /**
     * @param array{
     *     DeploymentId?: string|null,
     *     ClientCertificateId?: string|null,
     *     StageName?: string|null,
     *     Description?: string|null,
     *     CacheClusterEnabled?: bool|null,
     *     CacheClusterSize?: string|null,
     *     CacheClusterStatus?: string|null,
     *     MethodSettings?: list<AwsApiGatewayMethodSettings>|null,
     *     Variables?: array<string, string>|null,
     *     DocumentationVersion?: string|null,
     *     AccessLogSettings?: AwsApiGatewayAccessLogSettings|null,
     *     CanarySettings?: AwsApiGatewayCanarySettings|null,
     *     TracingEnabled?: bool|null,
     *     CreatedDate?: string|null,
     *     LastUpdatedDate?: string|null,
     *     WebAclArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
