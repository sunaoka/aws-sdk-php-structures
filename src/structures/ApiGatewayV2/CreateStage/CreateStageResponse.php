<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateStage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AccessLogSettings|null $AccessLogSettings
 * @property bool|null $ApiGatewayManaged
 * @property bool|null $AutoDeploy
 * @property string|null $ClientCertificateId
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property Shapes\RouteSettings|null $DefaultRouteSettings
 * @property string|null $DeploymentId
 * @property string|null $Description
 * @property string|null $LastDeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDate
 * @property array<string, Shapes\RouteSettings>|null $RouteSettings
 * @property string|null $StageName
 * @property array<string, string>|null $StageVariables
 * @property array<string, string>|null $Tags
 */
class CreateStageResponse extends Response
{
}
