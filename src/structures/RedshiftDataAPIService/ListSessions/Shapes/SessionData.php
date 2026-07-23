<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SessionId
 * @property 'AVAILABLE'|'BUSY'|'CLOSED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Database
 * @property string|null $DbUser
 * @property string|null $ClusterIdentifier
 * @property string|null $WorkgroupName
 * @property int<0, 86400>|null $SessionAliveSeconds
 * @property \Aws\Api\DateTimeResult|null $SessionTtl
 * @property string|null $CurrentStatementId
 */
class SessionData extends Shape
{
    /**
     * @param array{
     *     SessionId: string,
     *     Status: 'AVAILABLE'|'BUSY'|'CLOSED',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Database?: string|null,
     *     DbUser?: string|null,
     *     ClusterIdentifier?: string|null,
     *     WorkgroupName?: string|null,
     *     SessionAliveSeconds?: int<0, 86400>|null,
     *     SessionTtl?: \Aws\Api\DateTimeResult|null,
     *     CurrentStatementId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
