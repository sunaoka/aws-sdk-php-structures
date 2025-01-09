<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string $sourceGraphId
 * @property \Aws\Api\DateTimeResult $snapshotCreateTime
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED' $status
 * @property string $kmsKeyIdentifier
 */
class GraphSnapshotSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     sourceGraphId?: string,
     *     snapshotCreateTime?: \Aws\Api\DateTimeResult,
     *     status?: 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED',
     *     kmsKeyIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
