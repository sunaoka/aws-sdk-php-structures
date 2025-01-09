<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessLogSettings $AccessLogSettings
 * @property string $ApiId
 * @property bool $AutoDeploy
 * @property string $ClientCertificateId
 * @property Shapes\RouteSettings $DefaultRouteSettings
 * @property string $DeploymentId
 * @property string $Description
 * @property array<string, Shapes\RouteSettings> $RouteSettings
 * @property string $StageName
 * @property array<string, string> $StageVariables
 */
class UpdateStageRequest extends Request
{
    /**
     * @param array{
     *     AccessLogSettings?: Shapes\AccessLogSettings,
     *     ApiId: string,
     *     AutoDeploy?: bool,
     *     ClientCertificateId?: string,
     *     DefaultRouteSettings?: Shapes\RouteSettings,
     *     DeploymentId?: string,
     *     Description?: string,
     *     RouteSettings?: array<string, Shapes\RouteSettings>,
     *     StageName: string,
     *     StageVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
