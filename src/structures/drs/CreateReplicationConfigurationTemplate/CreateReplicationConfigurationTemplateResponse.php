<?php

namespace Sunaoka\Aws\Structures\drs\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property bool $associateDefaultSecurityGroup
 * @property bool $autoReplicateNewDisks
 * @property int $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'GP3'|'ST1'|'AUTO' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE' $ebsEncryption
 * @property string $ebsEncryptionKeyArn
 * @property list<Shapes\PITPolicyRule> $pitPolicy
 * @property string $replicationConfigurationTemplateID
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string> $tags
 * @property bool $useDedicatedReplicationServer
 */
class CreateReplicationConfigurationTemplateResponse extends Response
{
}
