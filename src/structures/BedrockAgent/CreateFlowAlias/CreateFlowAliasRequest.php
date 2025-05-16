<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property string|null $description
 * @property string $flowIdentifier
 * @property string $name
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property array<string, string>|null $tags
 */
class CreateFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     concurrencyConfiguration?: Shapes\FlowAliasConcurrencyConfiguration|null,
     *     description?: string|null,
     *     flowIdentifier: string,
     *     name: string,
     *     routingConfiguration: list<Shapes\FlowAliasRoutingConfigurationListItem>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
