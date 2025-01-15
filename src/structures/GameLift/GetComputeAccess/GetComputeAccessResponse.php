<?php

namespace Sunaoka\Aws\Structures\GameLift\GetComputeAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property string|null $ComputeName
 * @property string|null $ComputeArn
 * @property Shapes\AwsCredentials|null $Credentials
 * @property string|null $Target
 * @property list<Shapes\ContainerIdentifier>|null $ContainerIdentifiers
 */
class GetComputeAccessResponse extends Response
{
}
