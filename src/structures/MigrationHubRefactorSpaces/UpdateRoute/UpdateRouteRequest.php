<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\UpdateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'INACTIVE' $ActivationState
 * @property string $ApplicationIdentifier
 * @property string $EnvironmentIdentifier
 * @property string $RouteIdentifier
 */
class UpdateRouteRequest extends Request
{
    /**
     * @param array{
     *     ActivationState: 'ACTIVE'|'INACTIVE',
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
