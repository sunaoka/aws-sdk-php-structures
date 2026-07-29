<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamUrl;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string|null $StreamUrlId
 * @property string|null $StreamUrl
 * @property 'ACTIVE'|'EXPIRED'|'REVOKED'|'LIMIT_REACHED'|null $Status
 * @property 'userRevoked'|'revokedAndTerminatingSessions'|'revokedAndSessionsTerminated'|'streamGroupDeleted'|'applicationDeleted'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int<1, max>|null $UsageLimit
 * @property int<0, max>|null $RemainingUses
 * @property string|null $StreamGroupArn
 * @property string|null $ApplicationArn
 * @property 'WebRTC'|null $Protocol
 * @property list<string>|null $Locations
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property string|null $Description
 * @property list<string>|null $AdditionalLaunchArgs
 * @property array<string, string>|null $AdditionalEnvironmentVariables
 * @property string|null $RoleArn
 * @property Shapes\DisplayConfiguration|null $DisplayConfiguration
 */
class CreateStreamUrlResponse extends Response
{
}
