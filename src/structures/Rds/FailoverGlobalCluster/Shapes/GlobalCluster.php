<?php

namespace Sunaoka\Aws\Structures\Rds\FailoverGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalClusterIdentifier
 * @property string|null $GlobalClusterResourceId
 * @property string|null $GlobalClusterArn
 * @property string|null $Status
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $EngineLifecycleSupport
 * @property string|null $DatabaseName
 * @property bool|null $StorageEncrypted
 * @property 'none'|'sse-kms'|'sse-rds'|null $StorageEncryptionType
 * @property bool|null $DeletionProtection
 * @property list<GlobalClusterMember>|null $GlobalClusterMembers
 * @property string|null $Endpoint
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
     *     EngineLifecycleSupport?: string|null,
     *     DatabaseName?: string|null,
     *     StorageEncrypted?: bool|null,
     *     StorageEncryptionType?: 'none'|'sse-kms'|'sse-rds'|null,
     *     DeletionProtection?: bool|null,
     *     GlobalClusterMembers?: list<GlobalClusterMember>|null,
     *     Endpoint?: string|null,
     *     FailoverState?: FailoverState|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
