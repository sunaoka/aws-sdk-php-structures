<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\StartStreamSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, string>|null $AdditionalEnvironmentVariables
 * @property list<string>|null $AdditionalLaunchArgs
 * @property string|null $ApplicationArn
 * @property string|null $Arn
 * @property int<1, 3600>|null $ConnectionTimeoutSeconds
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property Shapes\ExportFilesMetadata|null $ExportFilesMetadata
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Location
 * @property string|null $LogFileLocationUri
 * @property 'WebRTC'|null $Protocol
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property string|null $SignalRequest
 * @property string|null $SignalResponse
 * @property 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null $Status
 * @property 'internalError'|'invalidSignalRequest'|'placementTimeout'|'applicationLogS3DestinationError'|null $StatusReason
 * @property string|null $StreamGroupId
 * @property string|null $UserId
 * @property string|null $WebSdkProtocolUrl
 */
class StartStreamSessionResponse extends Response
{
}
