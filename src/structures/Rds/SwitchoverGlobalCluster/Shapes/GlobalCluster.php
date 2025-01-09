<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $GlobalClusterResourceId
 * @property string $GlobalClusterArn
 * @property string $Status
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $EngineLifecycleSupport
 * @property string $DatabaseName
 * @property bool $StorageEncrypted
 * @property bool $DeletionProtection
 * @property list<GlobalClusterMember> $GlobalClusterMembers
 * @property string $Endpoint
 * @property FailoverState $FailoverState
 * @property list<Tag> $TagList
 */
class GlobalCluster extends Shape
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string,
     *     GlobalClusterResourceId?: string,
     *     GlobalClusterArn?: string,
     *     Status?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     EngineLifecycleSupport?: string,
     *     DatabaseName?: string,
     *     StorageEncrypted?: bool,
     *     DeletionProtection?: bool,
     *     GlobalClusterMembers?: list<GlobalClusterMember>,
     *     Endpoint?: string,
     *     FailoverState?: FailoverState,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
