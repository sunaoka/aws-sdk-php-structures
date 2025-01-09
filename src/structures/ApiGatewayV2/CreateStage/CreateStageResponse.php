<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateStage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AccessLogSettings $AccessLogSettings
 * @property bool $ApiGatewayManaged
 * @property bool $AutoDeploy
 * @property string $ClientCertificateId
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property Shapes\RouteSettings $DefaultRouteSettings
 * @property string $DeploymentId
 * @property string $Description
 * @property string $LastDeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult $LastUpdatedDate
 * @property array<string, Shapes\RouteSettings> $RouteSettings
 * @property string $StageName
 * @property array<string, string> $StageVariables
 * @property array<string, string> $Tags
 */
class CreateStageResponse extends Response
{
}
