<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterArn
 * @property list<string>|null $Readers
 * @property bool|null $IsWriter
 * @property 'connected'|'pending-resync'|null $SynchronizationStatus
 */
class GlobalClusterMember extends Shape
{
    /**
     * @param array{
     *     DBClusterArn?: string|null,
     *     Readers?: list<string>|null,
     *     IsWriter?: bool|null,
     *     SynchronizationStatus?: 'connected'|'pending-resync'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
