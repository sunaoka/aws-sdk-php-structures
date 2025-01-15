<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetSyncBlockerSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'AUTOMATED' $Type
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property string $CreatedReason
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property list<SyncBlockerContext>|null $Contexts
 * @property string|null $ResolvedReason
 * @property \Aws\Api\DateTimeResult|null $ResolvedAt
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
     *     Contexts?: list<SyncBlockerContext>|null,
     *     ResolvedReason?: string|null,
     *     ResolvedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
