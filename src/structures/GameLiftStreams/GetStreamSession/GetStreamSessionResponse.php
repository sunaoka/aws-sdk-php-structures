<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $StreamGroupId
 * @property string|null $UserId
 * @property 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null $Status
 * @property 'internalError'|'invalidSignalRequest'|'placementTimeout'|'applicationLogS3DestinationError'|null $StatusReason
 * @property 'WebRTC'|null $Protocol
 * @property string|null $Location
 * @property string|null $SignalRequest
 * @property string|null $SignalResponse
 * @property int<1, 3600>|null $ConnectionTimeoutSeconds
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property list<string>|null $AdditionalLaunchArgs
 * @property array<string, string>|null $AdditionalEnvironmentVariables
 * @property string|null $LogFileLocationUri
 * @property string|null $WebSdkProtocolUrl
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $ApplicationArn
 * @property Shapes\ExportFilesMetadata|null $ExportFilesMetadata
 */
class GetStreamSessionResponse extends Response
{
}
