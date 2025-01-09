<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientCertificateId
 * @property string $CreatedDate
 * @property string $Description
 * @property AwsApiGatewayV2RouteSettings $DefaultRouteSettings
 * @property string $DeploymentId
 * @property string $LastUpdatedDate
 * @property AwsApiGatewayV2RouteSettings $RouteSettings
 * @property string $StageName
 * @property array<string, string> $StageVariables
 * @property AwsApiGatewayAccessLogSettings $AccessLogSettings
 * @property bool $AutoDeploy
 * @property string $LastDeploymentStatusMessage
 * @property bool $ApiGatewayManaged
 */
class AwsApiGatewayV2StageDetails extends Shape
{
    /**
     * @param array{
     *     ClientCertificateId?: string,
     *     CreatedDate?: string,
     *     Description?: string,
     *     DefaultRouteSettings?: AwsApiGatewayV2RouteSettings,
     *     DeploymentId?: string,
     *     LastUpdatedDate?: string,
     *     RouteSettings?: AwsApiGatewayV2RouteSettings,
     *     StageName?: string,
     *     StageVariables?: array<string, string>,
     *     AccessLogSettings?: AwsApiGatewayAccessLogSettings,
     *     AutoDeploy?: bool,
     *     LastDeploymentStatusMessage?: string,
     *     ApiGatewayManaged?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
