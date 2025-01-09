<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
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
class UpdateReplicationConfigurationResponse extends Response
{
}
