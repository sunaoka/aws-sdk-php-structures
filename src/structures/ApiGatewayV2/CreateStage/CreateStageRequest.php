<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessLogSettings|null $AccessLogSettings
 * @property string $ApiId
 * @property bool|null $AutoDeploy
 * @property string|null $ClientCertificateId
 * @property Shapes\RouteSettings|null $DefaultRouteSettings
 * @property string|null $DeploymentId
 * @property string|null $Description
 * @property array<string, Shapes\RouteSettings>|null $RouteSettings
 * @property string $StageName
 * @property array<string, string>|null $StageVariables
 * @property array<string, string>|null $Tags
 */
class CreateStageRequest extends Request
{
    /**
     * @param array{
     *     AccessLogSettings?: Shapes\AccessLogSettings|null,
     *     ApiId: string,
     *     AutoDeploy?: bool|null,
     *     ClientCertificateId?: string|null,
     *     DefaultRouteSettings?: Shapes\RouteSettings|null,
     *     DeploymentId?: string|null,
     *     Description?: string|null,
     *     RouteSettings?: array<string, Shapes\RouteSettings>|null,
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
