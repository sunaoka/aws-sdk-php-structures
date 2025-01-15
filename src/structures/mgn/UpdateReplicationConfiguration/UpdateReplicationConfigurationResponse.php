<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
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
 * @property string|null $sourceServerID
 * @property string|null $stagingAreaSubnetId
 * @property array<string, string>|null $stagingAreaTags
 * @property bool|null $useDedicatedReplicationServer
 * @property bool|null $useFipsEndpoint
 */
class UpdateReplicationConfigurationResponse extends Response
{
}
