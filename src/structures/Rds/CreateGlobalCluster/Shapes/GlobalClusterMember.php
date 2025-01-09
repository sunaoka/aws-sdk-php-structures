<?php

namespace Sunaoka\Aws\Structures\Rds\CreateGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterArn
 * @property list<string> $Readers
 * @property bool $IsWriter
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'unknown' $GlobalWriteForwardingStatus
 * @property 'connected'|'pending-resync' $SynchronizationStatus
 */
class GlobalClusterMember extends Shape
{
    /**
     * @param array{
     *     DBClusterArn?: string,
     *     Readers?: list<string>,
     *     IsWriter?: bool,
     *     GlobalWriteForwardingStatus?: 'enabled'|'disabled'|'enabling'|'disabling'|'unknown',
     *     SynchronizationStatus?: 'connected'|'pending-resync'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
