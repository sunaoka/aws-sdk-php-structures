<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessLogSettings $AccessLogSettings
 * @property bool $ApiGatewayManaged
 * @property bool $AutoDeploy
 * @property string $ClientCertificateId
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property RouteSettings $DefaultRouteSettings
 * @property string $DeploymentId
 * @property string $Description
 * @property string $LastDeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult $LastUpdatedDate
 * @property array<string, RouteSettings> $RouteSettings
 * @property string $StageName
 * @property array<string, string> $StageVariables
 * @property array<string, string> $Tags
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     AccessLogSettings?: AccessLogSettings,
     *     ApiGatewayManaged?: bool,
     *     AutoDeploy?: bool,
     *     ClientCertificateId?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     DefaultRouteSettings?: RouteSettings,
     *     DeploymentId?: string,
     *     Description?: string,
     *     LastDeploymentStatusMessage?: string,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     RouteSettings?: array<string, RouteSettings>,
     *     StageName: string,
     *     StageVariables?: array<string, string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
