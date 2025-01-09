<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $commandId
 * @property string $commandArn
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise' $namespace
 * @property string $displayName
 * @property string $description
 * @property list<Shapes\CommandParameter> $mandatoryParameters
 * @property Shapes\CommandPayload $payload
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property bool $deprecated
 * @property bool $pendingDeletion
 */
class GetCommandResponse extends Response
{
}
