<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateSyncBlocker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'AUTOMATED' $Type
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property string $CreatedReason
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property list<SyncBlockerContext> $Contexts
 * @property string $ResolvedReason
 * @property \Aws\Api\DateTimeResult $ResolvedAt
 */
class SyncBlocker extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'AUTOMATED',
     *     Status: 'ACTIVE'|'RESOLVED',
     *     CreatedReason: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Contexts?: list<SyncBlockerContext>,
     *     ResolvedReason?: string,
     *     ResolvedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
