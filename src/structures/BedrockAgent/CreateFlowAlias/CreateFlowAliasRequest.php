<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property Shapes\FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property string $flowIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     routingConfiguration: list<Shapes\FlowAliasRoutingConfigurationListItem>,
     *     concurrencyConfiguration?: Shapes\FlowAliasConcurrencyConfiguration|null,
     *     flowIdentifier: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
