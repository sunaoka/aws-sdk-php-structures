<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $date
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'Success'|'Failed'|'InProgress'|'NotFound'|null $status
 * @property list<AttachedDisk>|null $fromAttachedDisks
 */
class AutoSnapshotDetails extends Shape
{
    /**
     * @param array{
     *     date?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'Success'|'Failed'|'InProgress'|'NotFound'|null,
     *     fromAttachedDisks?: list<AttachedDisk>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
