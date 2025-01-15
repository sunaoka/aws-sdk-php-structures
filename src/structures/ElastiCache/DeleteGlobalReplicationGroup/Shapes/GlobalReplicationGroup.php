<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteGlobalReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalReplicationGroupId
 * @property string|null $GlobalReplicationGroupDescription
 * @property string|null $Status
 * @property string|null $CacheNodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property list<GlobalReplicationGroupMember>|null $Members
 * @property bool|null $ClusterEnabled
 * @property list<GlobalNodeGroup>|null $GlobalNodeGroups
 * @property bool|null $AuthTokenEnabled
 * @property bool|null $TransitEncryptionEnabled
 * @property bool|null $AtRestEncryptionEnabled
 * @property string|null $ARN
 */
class GlobalReplicationGroup extends Shape
{
    /**
     * @param array{
     *     GlobalReplicationGroupId?: string|null,
     *     GlobalReplicationGroupDescription?: string|null,
     *     Status?: string|null,
     *     CacheNodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     Members?: list<GlobalReplicationGroupMember>|null,
     *     ClusterEnabled?: bool|null,
     *     GlobalNodeGroups?: list<GlobalNodeGroup>|null,
     *     AuthTokenEnabled?: bool|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     AtRestEncryptionEnabled?: bool|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
