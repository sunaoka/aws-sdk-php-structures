<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $EnvironmentIdentifier
 * @property string $RouteIdentifier
 */
class DeleteRouteRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     EnvironmentIdentifier: string,
     *     RouteIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
