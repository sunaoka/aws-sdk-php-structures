<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DBClusterEndpointIdentifier
 * @property string|null $DBClusterIdentifier
 * @property string|null $DBClusterEndpointResourceIdentifier
 * @property string|null $Endpoint
 * @property string|null $Status
 * @property string|null $EndpointType
 * @property string|null $CustomEndpointType
 * @property list<string>|null $StaticMembers
 * @property list<string>|null $ExcludedMembers
 * @property string|null $DBClusterEndpointArn
 */
class DeleteDBClusterEndpointResponse extends Response
{
}
