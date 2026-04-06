<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property bool|null $associateDefaultSecurityGroup
 * @property int<0, 10000>|null $bandwidthThrottling
 * @property bool|null $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property 'GP2'|'ST1'|'GP3'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property string|null $name
 * @property list<Shapes\ReplicationConfigurationReplicatedDisk>|null $replicatedDisks
 * @property string|null $replicationServerInstanceType
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string $sourceServerID
 * @property string|null $stagingAreaSubnetId
 * @property array<string, string>|null $stagingAreaTags
 * @property bool|null $useDedicatedReplicationServer
 * @property bool|null $useFipsEndpoint
 */
class UpdateReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     associateDefaultSecurityGroup?: bool|null,
     *     bandwidthThrottling?: int<0, 10000>|null,
     *     createPublicIP?: bool|null,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'ST1'|'GP3'|null,
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|null,
     *     ebsEncryptionKeyArn?: string|null,
     *     name?: string|null,
     *     replicatedDisks?: list<Shapes\ReplicationConfigurationReplicatedDisk>|null,
     *     replicationServerInstanceType?: string|null,
     *     replicationServersSecurityGroupsIDs?: list<string>|null,
     *     sourceServerID: string,
     *     stagingAreaSubnetId?: string|null,
     *     stagingAreaTags?: array<string, string>|null,
     *     useDedicatedReplicationServer?: bool|null,
     *     useFipsEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
