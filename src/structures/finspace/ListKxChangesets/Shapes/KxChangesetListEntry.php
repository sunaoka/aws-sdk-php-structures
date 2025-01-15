<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxChangesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $changesetId
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $activeFromTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property 'PENDING'|'PROCESSING'|'FAILED'|'COMPLETED'|null $status
 */
class KxChangesetListEntry extends Shape
{
    /**
     * @param array{
     *     changesetId?: string|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     activeFromTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'PROCESSING'|'FAILED'|'COMPLETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
