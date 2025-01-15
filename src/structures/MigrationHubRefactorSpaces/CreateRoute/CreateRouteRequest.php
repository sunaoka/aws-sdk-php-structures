<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string|null $ClientToken
 * @property Shapes\DefaultRouteInput|null $DefaultRoute
 * @property string $EnvironmentIdentifier
 * @property 'DEFAULT'|'URI_PATH' $RouteType
 * @property string $ServiceIdentifier
 * @property array<string, string>|null $Tags
 * @property Shapes\UriPathRouteInput|null $UriPathRoute
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ClientToken?: string|null,
     *     DefaultRoute?: Shapes\DefaultRouteInput|null,
     *     EnvironmentIdentifier: string,
     *     RouteType: 'DEFAULT'|'URI_PATH',
     *     ServiceIdentifier: string,
     *     Tags?: array<string, string>|null,
     *     UriPathRoute?: Shapes\UriPathRouteInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
