<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeEndpointAccess;

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
class RevokeEndpointAccessResponse extends Response
{
}
