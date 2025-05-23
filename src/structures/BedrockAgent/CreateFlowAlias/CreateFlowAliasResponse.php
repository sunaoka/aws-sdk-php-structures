<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property Shapes\FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $flowId
 * @property string $id
 * @property string $name
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateFlowAliasResponse extends Response
{
}
