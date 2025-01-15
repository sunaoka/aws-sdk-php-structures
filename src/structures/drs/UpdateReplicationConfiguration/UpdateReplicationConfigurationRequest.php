<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $associateDefaultSecurityGroup
 * @property bool|null $autoReplicateNewDisks
 * @property int<0, max>|null $bandwidthThrottling
 * @property bool|null $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property 'GP2'|'GP3'|'ST1'|'AUTO'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property string|null $name
 * @property list<Shapes\PITPolicyRule>|null $pitPolicy
 * @property list<Shapes\ReplicationConfigurationReplicatedDisk>|null $replicatedDisks
 * @property string|null $replicationServerInstanceType
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string $sourceServerID
 * @property string|null $stagingAreaSubnetId
 * @property array<string, string>|null $stagingAreaTags
 * @property bool|null $useDedicatedReplicationServer
 */
class UpdateReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     associateDefaultSecurityGroup?: bool|null,
     *     autoReplicateNewDisks?: bool|null,
     *     bandwidthThrottling?: int<0, max>|null,
     *     createPublicIP?: bool|null,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'GP3'|'ST1'|'AUTO'|null,
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|'NONE'|null,
     *     ebsEncryptionKeyArn?: string|null,
     *     name?: string|null,
     *     pitPolicy?: list<Shapes\PITPolicyRule>|null,
     *     replicatedDisks?: list<Shapes\ReplicationConfigurationReplicatedDisk>|null,
     *     replicationServerInstanceType?: string|null,
     *     replicationServersSecurityGroupsIDs?: list<string>|null,
     *     sourceServerID: string,
     *     stagingAreaSubnetId?: string|null,
     *     stagingAreaTags?: array<string, string>|null,
     *     useDedicatedReplicationServer?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
