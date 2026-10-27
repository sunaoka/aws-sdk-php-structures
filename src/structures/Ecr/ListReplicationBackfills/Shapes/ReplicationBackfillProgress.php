<?php

namespace Sunaoka\Aws\Structures\Ecr\ListReplicationBackfills\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $totalReplicationCount
 * @property int<0, max> $completedReplicationCount
 * @property int<0, max> $failedReplicationCount
 * @property list<string> $failureCodes
 */
class ReplicationBackfillProgress extends Shape
{
    /**
     * @param array{
     *     totalReplicationCount: int<0, max>,
     *     completedReplicationCount: int<0, max>,
     *     failedReplicationCount: int<0, max>,
     *     failureCodes: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
