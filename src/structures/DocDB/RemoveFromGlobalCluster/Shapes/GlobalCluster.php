<?php

namespace Sunaoka\Aws\Structures\DocDB\RemoveFromGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalClusterIdentifier
 * @property string|null $GlobalClusterResourceId
 * @property string|null $GlobalClusterArn
 * @property string|null $Status
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DatabaseName
 * @property bool|null $StorageEncrypted
 * @property bool|null $DeletionProtection
 * @property list<GlobalClusterMember>|null $GlobalClusterMembers
 * @property FailoverState|null $FailoverState
 * @property list<Tag>|null $TagList
 */
class GlobalCluster extends Shape
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string|null,
     *     GlobalClusterResourceId?: string|null,
     *     GlobalClusterArn?: string|null,
     *     Status?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DatabaseName?: string|null,
     *     StorageEncrypted?: bool|null,
     *     DeletionProtection?: bool|null,
     *     GlobalClusterMembers?: list<GlobalClusterMember>|null,
     *     FailoverState?: FailoverState|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
