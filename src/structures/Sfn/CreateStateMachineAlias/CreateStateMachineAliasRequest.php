<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachineAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $name
 * @property list<Shapes\RoutingConfigurationListItem> $routingConfiguration
 */
class CreateStateMachineAliasRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     name: string,
     *     routingConfiguration: list<Shapes\RoutingConfigurationListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
