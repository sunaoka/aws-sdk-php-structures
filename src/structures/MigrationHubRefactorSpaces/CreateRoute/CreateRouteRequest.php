<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ClientToken
 * @property Shapes\DefaultRouteInput $DefaultRoute
 * @property string $EnvironmentIdentifier
 * @property 'DEFAULT'|'URI_PATH' $RouteType
 * @property string $ServiceIdentifier
 * @property array<string, string> $Tags
 * @property Shapes\UriPathRouteInput $UriPathRoute
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ClientToken?: string,
     *     DefaultRoute?: Shapes\DefaultRouteInput,
     *     EnvironmentIdentifier: string,
     *     RouteType: 'DEFAULT'|'URI_PATH',
     *     ServiceIdentifier: string,
     *     Tags?: array<string, string>,
     *     UriPathRoute?: Shapes\UriPathRouteInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
