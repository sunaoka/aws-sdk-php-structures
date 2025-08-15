<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property Shapes\FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property string $flowIdentifier
 * @property string $aliasIdentifier
 */
class UpdateFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     routingConfiguration: list<Shapes\FlowAliasRoutingConfigurationListItem>,
     *     concurrencyConfiguration?: Shapes\FlowAliasConcurrencyConfiguration|null,
     *     flowIdentifier: string,
     *     aliasIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
