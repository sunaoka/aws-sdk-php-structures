<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property bool $associateDefaultSecurityGroup
 * @property int<0, 10000> $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'ST1'|'GP3' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM' $ebsEncryption
 * @property string $ebsEncryptionKeyArn
 * @property string $name
 * @property list<Shapes\ReplicationConfigurationReplicatedDisk> $replicatedDisks
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $sourceServerID
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property bool $useDedicatedReplicationServer
 * @property bool $useFipsEndpoint
 */
class UpdateReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     associateDefaultSecurityGroup?: bool,
     *     bandwidthThrottling?: int<0, 10000>,
     *     createPublicIP?: bool,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType?: 'GP2'|'ST1'|'GP3',
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM',
     *     ebsEncryptionKeyArn?: string,
     *     name?: string,
     *     replicatedDisks?: list<Shapes\ReplicationConfigurationReplicatedDisk>,
     *     replicationServerInstanceType?: string,
     *     replicationServersSecurityGroupsIDs?: list<string>,
     *     sourceServerID: string,
     *     stagingAreaSubnetId?: string,
     *     stagingAreaTags?: array<string, string>,
     *     useDedicatedReplicationServer?: bool,
     *     useFipsEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
