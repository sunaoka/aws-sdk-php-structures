<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncBlockerSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SyncBlockerContext>|null $contexts
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdReason
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $resolvedAt
 * @property string|null $resolvedReason
 * @property 'ACTIVE'|'RESOLVED' $status
 * @property 'AUTOMATED' $type
 */
class SyncBlocker extends Shape
{
    /**
     * @param array{
     *     contexts?: list<SyncBlockerContext>|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdReason: string,
     *     id: string,
     *     resolvedAt?: \Aws\Api\DateTimeResult|null,
     *     resolvedReason?: string|null,
     *     status: 'ACTIVE'|'RESOLVED',
     *     type: 'AUTOMATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
