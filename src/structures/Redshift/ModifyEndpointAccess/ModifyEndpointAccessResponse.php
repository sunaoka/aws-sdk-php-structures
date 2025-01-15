<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyEndpointAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $ResourceOwner
 * @property string|null $SubnetGroupName
 * @property string|null $EndpointStatus
 * @property string|null $EndpointName
 * @property \Aws\Api\DateTimeResult|null $EndpointCreateTime
 * @property int|null $Port
 * @property string|null $Address
 * @property list<Shapes\VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property Shapes\VpcEndpoint|null $VpcEndpoint
 */
class ModifyEndpointAccessResponse extends Response
{
}
