<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $date
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Success'|'Failed'|'InProgress'|'NotFound' $status
 * @property list<AttachedDisk> $fromAttachedDisks
 */
class AutoSnapshotDetails extends Shape
{
    /**
     * @param array{
     *     date?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     status?: 'Success'|'Failed'|'InProgress'|'NotFound',
     *     fromAttachedDisks?: list<AttachedDisk>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
