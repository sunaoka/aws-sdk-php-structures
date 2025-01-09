<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationInstanceClass
 * @property int $AllocatedStorage
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property string $NetworkType
 */
class ReplicationPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     ReplicationInstanceClass?: string,
     *     AllocatedStorage?: int,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     NetworkType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
