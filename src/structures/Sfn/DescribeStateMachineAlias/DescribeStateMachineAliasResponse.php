<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stateMachineAliasArn
 * @property string $name
 * @property string $description
 * @property list<Shapes\RoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $updateDate
 */
class DescribeStateMachineAliasResponse extends Response
{
}
