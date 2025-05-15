<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasIdentifier
 * @property Shapes\FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property string|null $description
 * @property string $flowIdentifier
 * @property string $name
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 */
class UpdateFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     aliasIdentifier: string,
     *     concurrencyConfiguration?: Shapes\FlowAliasConcurrencyConfiguration|null,
     *     description?: string|null,
     *     flowIdentifier: string,
     *     name: string,
     *     routingConfiguration: list<Shapes\FlowAliasRoutingConfigurationListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
