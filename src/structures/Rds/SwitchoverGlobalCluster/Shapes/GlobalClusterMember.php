<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterArn
 * @property list<string>|null $Readers
 * @property bool|null $IsWriter
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'unknown'|null $GlobalWriteForwardingStatus
 * @property 'connected'|'pending-resync'|null $SynchronizationStatus
 */
class GlobalClusterMember extends Shape
{
    /**
     * @param array{
     *     DBClusterArn?: string|null,
     *     Readers?: list<string>|null,
     *     IsWriter?: bool|null,
     *     GlobalWriteForwardingStatus?: 'enabled'|'disabled'|'enabling'|'disabling'|'unknown'|null,
     *     SynchronizationStatus?: 'connected'|'pending-resync'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
