<?php

namespace Sunaoka\Aws\Structures\drs\DescribeReplicationConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property list<PITPolicyRule>|null $pitPolicy
 * @property string $replicationConfigurationTemplateID
 * @property string|null $replicationServerInstanceType
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string|null $stagingAreaSubnetId
 * @property array<string, string>|null $stagingAreaTags
 * @property array<string, string>|null $tags
 * @property bool|null $useDedicatedReplicationServer
 */
class ReplicationConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     associateDefaultSecurityGroup?: bool|null,
     *     autoReplicateNewDisks?: bool|null,
     *     bandwidthThrottling?: int<0, max>|null,
     *     createPublicIP?: bool|null,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'GP3'|'ST1'|'AUTO'|null,
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|'NONE'|null,
     *     ebsEncryptionKeyArn?: string|null,
     *     pitPolicy?: list<PITPolicyRule>|null,
     *     replicationConfigurationTemplateID: string,
     *     replicationServerInstanceType?: string|null,
     *     replicationServersSecurityGroupsIDs?: list<string>|null,
     *     stagingAreaSubnetId?: string|null,
     *     stagingAreaTags?: array<string, string>|null,
     *     tags?: array<string, string>|null,
     *     useDedicatedReplicationServer?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
