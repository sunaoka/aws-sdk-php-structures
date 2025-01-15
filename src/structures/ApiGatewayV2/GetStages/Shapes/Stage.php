<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessLogSettings|null $AccessLogSettings
 * @property bool|null $ApiGatewayManaged
 * @property bool|null $AutoDeploy
 * @property string|null $ClientCertificateId
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property RouteSettings|null $DefaultRouteSettings
 * @property string|null $DeploymentId
 * @property string|null $Description
 * @property string|null $LastDeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDate
 * @property array<string, RouteSettings>|null $RouteSettings
 * @property string $StageName
 * @property array<string, string>|null $StageVariables
 * @property array<string, string>|null $Tags
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     AccessLogSettings?: AccessLogSettings|null,
     *     ApiGatewayManaged?: bool|null,
     *     AutoDeploy?: bool|null,
     *     ClientCertificateId?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     DefaultRouteSettings?: RouteSettings|null,
     *     DeploymentId?: string|null,
     *     Description?: string|null,
     *     LastDeploymentStatusMessage?: string|null,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     RouteSettings?: array<string, RouteSettings>|null,
     *     StageName: string,
     *     StageVariables?: array<string, string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
