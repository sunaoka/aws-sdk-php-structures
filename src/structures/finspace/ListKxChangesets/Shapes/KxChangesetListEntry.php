<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxChangesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $changesetId
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $activeFromTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property 'PENDING'|'PROCESSING'|'FAILED'|'COMPLETED' $status
 */
class KxChangesetListEntry extends Shape
{
    /**
     * @param array{
     *     changesetId?: string,
     *     createdTimestamp?: \Aws\Api\DateTimeResult,
     *     activeFromTimestamp?: \Aws\Api\DateTimeResult,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     status?: 'PENDING'|'PROCESSING'|'FAILED'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
