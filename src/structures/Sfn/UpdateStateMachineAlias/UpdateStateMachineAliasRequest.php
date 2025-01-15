<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachineAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineAliasArn
 * @property string|null $description
 * @property list<Shapes\RoutingConfigurationListItem>|null $routingConfiguration
 */
class UpdateStateMachineAliasRequest extends Request
{
    /**
     * @param array{
     *     stateMachineAliasArn: string,
     *     description?: string|null,
     *     routingConfiguration?: list<Shapes\RoutingConfigurationListItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
