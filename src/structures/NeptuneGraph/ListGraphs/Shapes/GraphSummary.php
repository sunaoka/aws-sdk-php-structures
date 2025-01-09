<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING' $status
 * @property int<16, 24576> $provisionedMemory
 * @property bool $publicConnectivity
 * @property string $endpoint
 * @property int<0, 2> $replicaCount
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
     *     provisionedMemory?: int<16, 24576>,
     *     publicConnectivity?: bool,
     *     endpoint?: string,
     *     replicaCount?: int<0, 2>,
     *     kmsKeyIdentifier?: string,
     *     deletionProtection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
