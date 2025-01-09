<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEndpointAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterIdentifier
 * @property string $ResourceOwner
 * @property string $SubnetGroupName
 * @property string $EndpointStatus
 * @property string $EndpointName
 * @property \Aws\Api\DateTimeResult $EndpointCreateTime
 * @property int $Port
 * @property string $Address
 * @property list<Shapes\VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property Shapes\VpcEndpoint $VpcEndpoint
 */
class CreateEndpointAccessResponse extends Response
{
}
