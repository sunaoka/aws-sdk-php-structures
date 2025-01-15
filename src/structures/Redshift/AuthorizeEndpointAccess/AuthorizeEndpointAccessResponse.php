<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeEndpointAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Grantor
 * @property string|null $Grantee
 * @property string|null $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $AuthorizeTime
 * @property string|null $ClusterStatus
 * @property 'Authorized'|'Revoking'|null $Status
 * @property bool|null $AllowedAllVPCs
 * @property list<string>|null $AllowedVPCs
 * @property int|null $EndpointCount
 */
class AuthorizeEndpointAccessResponse extends Response
{
}
