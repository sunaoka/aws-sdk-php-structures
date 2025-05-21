<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationLogOutputUri
 * @property list<string>|null $ApplicationLogPaths
 * @property string|null $ApplicationSourceUri
 * @property string $Arn
 * @property list<string>|null $AssociatedStreamGroups
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property string|null $ExecutablePath
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<Shapes\ReplicationStatus>|null $ReplicationStatuses
 * @property Shapes\RuntimeEnvironment|null $RuntimeEnvironment
 * @property 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null $Status
 * @property 'internalError'|'accessDenied'|null $StatusReason
 */
class GetApplicationResponse extends Response
{
}
