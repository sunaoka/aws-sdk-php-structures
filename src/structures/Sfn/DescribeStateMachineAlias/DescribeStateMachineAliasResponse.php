<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $stateMachineAliasArn
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\RoutingConfigurationListItem>|null $routingConfiguration
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $updateDate
 */
class DescribeStateMachineAliasResponse extends Response
{
}
