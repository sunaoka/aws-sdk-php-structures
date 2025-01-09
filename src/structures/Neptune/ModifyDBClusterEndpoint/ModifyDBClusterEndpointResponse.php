<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DBClusterEndpointIdentifier
 * @property string $DBClusterIdentifier
 * @property string $DBClusterEndpointResourceIdentifier
 * @property string $Endpoint
 * @property string $Status
 * @property string $EndpointType
 * @property string $CustomEndpointType
 * @property list<string> $StaticMembers
 * @property list<string> $ExcludedMembers
 * @property string $DBClusterEndpointArn
 */
class ModifyDBClusterEndpointResponse extends Response
{
}
