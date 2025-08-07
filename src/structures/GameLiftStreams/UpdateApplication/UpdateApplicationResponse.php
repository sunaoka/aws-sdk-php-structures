<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string|null $Description
 * @property Shapes\RuntimeEnvironment|null $RuntimeEnvironment
 * @property string|null $ExecutablePath
 * @property list<string>|null $ApplicationLogPaths
 * @property string|null $ApplicationLogOutputUri
 * @property string|null $ApplicationSourceUri
 * @property string|null $Id
 * @property 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null $Status
 * @property 'internalError'|'accessDenied'|null $StatusReason
 * @property list<Shapes\ReplicationStatus>|null $ReplicationStatuses
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<string>|null $AssociatedStreamGroups
 */
class UpdateApplicationResponse extends Response
{
}
