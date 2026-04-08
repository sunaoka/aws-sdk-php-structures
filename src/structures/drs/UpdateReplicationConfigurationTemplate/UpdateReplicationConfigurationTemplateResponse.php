<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $replicationConfigurationTemplateID
 * @property string|null $arn
 * @property string|null $stagingAreaSubnetId
 * @property bool|null $associateDefaultSecurityGroup
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string|null $replicationServerInstanceType
 * @property bool|null $useDedicatedReplicationServer
 * @property 'GP2'|'GP3'|'ST1'|'AUTO'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property int<0, max>|null $bandwidthThrottling
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property bool|null $createPublicIP
 * @property array<string, string>|null $stagingAreaTags
 * @property array<string, string>|null $tags
 * @property list<Shapes\PITPolicyRule>|null $pitPolicy
 * @property bool|null $autoReplicateNewDisks
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class UpdateReplicationConfigurationTemplateResponse extends Response
{
}
