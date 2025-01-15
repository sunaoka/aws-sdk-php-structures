<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientCertificateId
 * @property string|null $CreatedDate
 * @property string|null $Description
 * @property AwsApiGatewayV2RouteSettings|null $DefaultRouteSettings
 * @property string|null $DeploymentId
 * @property string|null $LastUpdatedDate
 * @property AwsApiGatewayV2RouteSettings|null $RouteSettings
 * @property string|null $StageName
 * @property array<string, string>|null $StageVariables
 * @property AwsApiGatewayAccessLogSettings|null $AccessLogSettings
 * @property bool|null $AutoDeploy
 * @property string|null $LastDeploymentStatusMessage
 * @property bool|null $ApiGatewayManaged
 */
class AwsApiGatewayV2StageDetails extends Shape
{
    /**
     * @param array{
     *     ClientCertificateId?: string|null,
     *     CreatedDate?: string|null,
     *     Description?: string|null,
     *     DefaultRouteSettings?: AwsApiGatewayV2RouteSettings|null,
     *     DeploymentId?: string|null,
     *     LastUpdatedDate?: string|null,
     *     RouteSettings?: AwsApiGatewayV2RouteSettings|null,
     *     StageName?: string|null,
     *     StageVariables?: array<string, string>|null,
     *     AccessLogSettings?: AwsApiGatewayAccessLogSettings|null,
     *     AutoDeploy?: bool|null,
     *     LastDeploymentStatusMessage?: string|null,
     *     ApiGatewayManaged?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
