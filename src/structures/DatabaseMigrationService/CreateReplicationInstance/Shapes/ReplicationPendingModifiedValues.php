<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationInstanceClass
 * @property int|null $AllocatedStorage
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property string|null $NetworkType
 */
class ReplicationPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     ReplicationInstanceClass?: string|null,
     *     AllocatedStorage?: int|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     NetworkType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
