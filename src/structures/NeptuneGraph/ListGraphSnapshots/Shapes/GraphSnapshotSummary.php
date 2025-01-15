<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string|null $sourceGraphId
 * @property \Aws\Api\DateTimeResult|null $snapshotCreateTime
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED'|null $status
 * @property string|null $kmsKeyIdentifier
 */
class GraphSnapshotSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     sourceGraphId?: string|null,
     *     snapshotCreateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED'|null,
     *     kmsKeyIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
