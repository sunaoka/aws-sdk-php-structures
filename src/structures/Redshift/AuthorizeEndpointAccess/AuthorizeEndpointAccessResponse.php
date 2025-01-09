<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeEndpointAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Grantor
 * @property string $Grantee
 * @property string $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult $AuthorizeTime
 * @property string $ClusterStatus
 * @property 'Authorized'|'Revoking' $Status
 * @property bool $AllowedAllVPCs
 * @property list<string> $AllowedVPCs
 * @property int $EndpointCount
 */
class AuthorizeEndpointAccessResponse extends Response
{
}
