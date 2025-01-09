<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associateDefaultSecurityGroup
 * @property bool $autoReplicateNewDisks
 * @property int<0, max> $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'GP3'|'ST1'|'AUTO' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE' $ebsEncryption
 * @property string $ebsEncryptionKeyArn
 * @property string $name
 * @property list<Shapes\PITPolicyRule> $pitPolicy
 * @property list<Shapes\ReplicationConfigurationReplicatedDisk> $replicatedDisks
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $sourceServerID
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property bool $useDedicatedReplicationServer
 */
class UpdateReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     associateDefaultSecurityGroup?: bool,
     *     autoReplicateNewDisks?: bool,
     *     bandwidthThrottling?: int<0, max>,
     *     createPublicIP?: bool,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType?: 'GP2'|'GP3'|'ST1'|'AUTO',
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|'NONE',
     *     ebsEncryptionKeyArn?: string,
     *     name?: string,
     *     pitPolicy?: list<Shapes\PITPolicyRule>,
     *     replicatedDisks?: list<Shapes\ReplicationConfigurationReplicatedDisk>,
     *     replicationServerInstanceType?: string,
     *     replicationServersSecurityGroupsIDs?: list<string>,
     *     sourceServerID: string,
     *     stagingAreaSubnetId?: string,
     *     stagingAreaTags?: array<string, string>,
     *     useDedicatedReplicationServer?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
