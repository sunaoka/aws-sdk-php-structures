<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $commandId
 * @property string|null $commandArn
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise'|null $namespace
 * @property string|null $displayName
 * @property string|null $description
 * @property list<Shapes\CommandParameter>|null $mandatoryParameters
 * @property Shapes\CommandPayload|null $payload
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property bool|null $deprecated
 * @property bool|null $pendingDeletion
 */
class GetDeviceCommandResponse extends Response
{
}
