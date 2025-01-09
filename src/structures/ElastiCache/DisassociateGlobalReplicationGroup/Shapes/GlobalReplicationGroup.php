<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DisassociateGlobalReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalReplicationGroupId
 * @property string $GlobalReplicationGroupDescription
 * @property string $Status
 * @property string $CacheNodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property list<GlobalReplicationGroupMember> $Members
 * @property bool $ClusterEnabled
 * @property list<GlobalNodeGroup> $GlobalNodeGroups
 * @property bool $AuthTokenEnabled
 * @property bool $TransitEncryptionEnabled
 * @property bool $AtRestEncryptionEnabled
 * @property string $ARN
 */
class GlobalReplicationGroup extends Shape
{
    /**
     * @param array{
     *     GlobalReplicationGroupId?: string,
     *     GlobalReplicationGroupDescription?: string,
     *     Status?: string,
     *     CacheNodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     Members?: list<GlobalReplicationGroupMember>,
     *     ClusterEnabled?: bool,
     *     GlobalNodeGroups?: list<GlobalNodeGroup>,
     *     AuthTokenEnabled?: bool,
     *     TransitEncryptionEnabled?: bool,
     *     AtRestEncryptionEnabled?: bool,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
