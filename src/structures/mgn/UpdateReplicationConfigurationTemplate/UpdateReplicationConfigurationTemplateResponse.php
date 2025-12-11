<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $replicationConfigurationTemplateID
 * @property string|null $arn
 * @property string|null $stagingAreaSubnetId
 * @property bool|null $associateDefaultSecurityGroup
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string|null $replicationServerInstanceType
 * @property bool|null $useDedicatedReplicationServer
 * @property 'GP2'|'ST1'|'GP3'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property int<0, 10000>|null $bandwidthThrottling
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property bool|null $createPublicIP
 * @property array<string, string>|null $stagingAreaTags
 * @property bool|null $useFipsEndpoint
 * @property array<string, string>|null $tags
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class UpdateReplicationConfigurationTemplateResponse extends Response
{
}
