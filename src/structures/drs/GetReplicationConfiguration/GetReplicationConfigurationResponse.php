<?php

namespace Sunaoka\Aws\Structures\drs\GetReplicationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $associateDefaultSecurityGroup
 * @property bool $autoReplicateNewDisks
 * @property int $bandwidthThrottling
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
class GetReplicationConfigurationResponse extends Response
{
}
