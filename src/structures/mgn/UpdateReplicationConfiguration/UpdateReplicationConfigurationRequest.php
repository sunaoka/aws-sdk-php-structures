<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string|null $name
 * @property string|null $stagingAreaSubnetId
 * @property bool|null $associateDefaultSecurityGroup
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string|null $replicationServerInstanceType
 * @property bool|null $useDedicatedReplicationServer
 * @property 'GP2'|'ST1'|'GP3'|null $defaultLargeStagingDiskType
 * @property list<Shapes\ReplicationConfigurationReplicatedDisk>|null $replicatedDisks
 * @property 'DEFAULT'|'CUSTOM'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property int<0, 10000>|null $bandwidthThrottling
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property bool|null $createPublicIP
 * @property array<string, string>|null $stagingAreaTags
 * @property bool|null $useFipsEndpoint
 * @property string|null $accountID
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class UpdateReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     name?: string|null,
     *     stagingAreaSubnetId?: string|null,
     *     associateDefaultSecurityGroup?: bool|null,
     *     replicationServersSecurityGroupsIDs?: list<string>|null,
     *     replicationServerInstanceType?: string|null,
     *     useDedicatedReplicationServer?: bool|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'ST1'|'GP3'|null,
     *     replicatedDisks?: list<Shapes\ReplicationConfigurationReplicatedDisk>|null,
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|null,
     *     ebsEncryptionKeyArn?: string|null,
     *     bandwidthThrottling?: int<0, 10000>|null,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     createPublicIP?: bool|null,
     *     stagingAreaTags?: array<string, string>|null,
     *     useFipsEndpoint?: bool|null,
     *     accountID?: string|null,
     *     internetProtocol?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
