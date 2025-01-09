<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasIdentifier
 * @property string $description
 * @property string $flowIdentifier
 * @property string $name
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 */
class UpdateFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     aliasIdentifier: string,
     *     description?: string,
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
