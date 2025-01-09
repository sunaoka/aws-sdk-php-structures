<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property bool $associateDefaultSecurityGroup
 * @property int<0, 10000> $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'ST1'|'GP3' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM' $ebsEncryption
 * @property string $ebsEncryptionKeyArn
 * @property string $replicationConfigurationTemplateID
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string> $tags
 * @property bool $useDedicatedReplicationServer
 * @property bool $useFipsEndpoint
 */
class UpdateReplicationConfigurationTemplateResponse extends Response
{
}
