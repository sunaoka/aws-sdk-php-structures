<?php

namespace Sunaoka\Aws\Structures\GameLift\GetComputeAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property string $ComputeName
 * @property string $ComputeArn
 * @property Shapes\AwsCredentials $Credentials
 * @property string $Target
 * @property list<Shapes\ContainerIdentifier> $ContainerIdentifiers
 */
class GetComputeAccessResponse extends Response
{
}
