<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateIngestEndpointCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $CreatedAt
 * @property string $Description
 * @property Shapes\EgressAccessLogs $EgressAccessLogs
 * @property Shapes\HlsIngest $HlsIngest
 * @property string $Id
 * @property Shapes\IngressAccessLogs $IngressAccessLogs
 * @property array<string, string> $Tags
 */
class RotateIngestEndpointCredentialsResponse extends Response
{
}
