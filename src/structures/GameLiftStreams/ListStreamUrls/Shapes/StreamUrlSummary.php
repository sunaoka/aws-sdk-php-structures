<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamUrls\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property string|null $Description
 */
class StreamUrlSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     StreamUrlId?: string|null,
     *     StreamUrl?: string|null,
     *     Status?: 'ACTIVE'|'EXPIRED'|'REVOKED'|'LIMIT_REACHED'|null,
     *     StatusReason?: 'userRevoked'|'revokedAndTerminatingSessions'|'revokedAndSessionsTerminated'|'streamGroupDeleted'|'applicationDeleted'|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UsageLimit?: int<1, max>|null,
     *     RemainingUses?: int<0, max>|null,
     *     StreamGroupArn?: string|null,
     *     ApplicationArn?: string|null,
     *     SessionLengthSeconds?: int<1, 86400>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
