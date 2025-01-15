<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property bool|null $associateDefaultSecurityGroup
 * @property bool|null $autoReplicateNewDisks
 * @property int<0, max>|null $bandwidthThrottling
 * @property bool|null $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property 'GP2'|'GP3'|'ST1'|'AUTO'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property list<Shapes\PITPolicyRule>|null $pitPolicy
 * @property string $replicationConfigurationTemplateID
 * @property string|null $replicationServerInstanceType
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string|null $stagingAreaSubnetId
 * @property array<string, string>|null $stagingAreaTags
 * @property array<string, string>|null $tags
 * @property bool|null $useDedicatedReplicationServer
 */
class UpdateReplicationConfigurationTemplateResponse extends Response
{
}
