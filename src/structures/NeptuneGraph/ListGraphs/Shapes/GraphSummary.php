<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING' $status
 * @property int $provisionedMemory
 * @property bool $publicConnectivity
 * @property string $endpoint
 * @property int $replicaCount
 * @property string $kmsKeyIdentifier
 * @property bool $deletionProtection
 */
class GraphSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     status?: 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING',
     *     provisionedMemory?: int,
     *     publicConnectivity?: bool,
     *     endpoint?: string,
     *     replicaCount?: int,
     *     kmsKeyIdentifier?: string,
     *     deletionProtection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
