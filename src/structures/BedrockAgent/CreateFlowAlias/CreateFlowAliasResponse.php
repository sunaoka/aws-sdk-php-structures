<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property Shapes\FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property string $flowId
 * @property string $id
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateFlowAliasResponse extends Response
{
}
