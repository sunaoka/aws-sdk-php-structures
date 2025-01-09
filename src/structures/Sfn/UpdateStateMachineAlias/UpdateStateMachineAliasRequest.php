<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachineAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineAliasArn
 * @property string $description
 * @property list<Shapes\RoutingConfigurationListItem> $routingConfiguration
 */
class UpdateStateMachineAliasRequest extends Request
{
    /**
     * @param array{
     *     stateMachineAliasArn: string,
     *     description?: string,
     *     routingConfiguration?: list<Shapes\RoutingConfigurationListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
