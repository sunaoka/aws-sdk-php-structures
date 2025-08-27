<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING'|'STARTING'|'STOPPING'|'STOPPED'|null $status
 * @property int<16, 24576>|null $provisionedMemory
 * @property bool|null $publicConnectivity
 * @property string|null $endpoint
 * @property int<0, 2>|null $replicaCount
 * @property string|null $kmsKeyIdentifier
 * @property bool|null $deletionProtection
 */
class GraphSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     status?: 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING'|'STARTING'|'STOPPING'|'STOPPED'|null,
     *     provisionedMemory?: int<16, 24576>|null,
     *     publicConnectivity?: bool|null,
     *     endpoint?: string|null,
     *     replicaCount?: int<0, 2>|null,
     *     kmsKeyIdentifier?: string|null,
     *     deletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
