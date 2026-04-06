<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeReplicationConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property bool|null $associateDefaultSecurityGroup
 * @property int<0, 10000>|null $bandwidthThrottling
 * @property bool|null $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property 'GP2'|'ST1'|'GP3'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|null $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property string $replicationConfigurationTemplateID
 * @property string|null $replicationServerInstanceType
 * @property list<string>|null $replicationServersSecurityGroupsIDs
 * @property string|null $stagingAreaSubnetId
 * @property array<string, string>|null $stagingAreaTags
 * @property array<string, string>|null $tags
 * @property bool|null $useDedicatedReplicationServer
 * @property bool|null $useFipsEndpoint
 */
class ReplicationConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     associateDefaultSecurityGroup?: bool|null,
     *     bandwidthThrottling?: int<0, 10000>|null,
     *     createPublicIP?: bool|null,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'ST1'|'GP3'|null,
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|null,
     *     ebsEncryptionKeyArn?: string|null,
     *     replicationConfigurationTemplateID: string,
     *     replicationServerInstanceType?: string|null,
     *     replicationServersSecurityGroupsIDs?: list<string>|null,
     *     stagingAreaSubnetId?: string|null,
     *     stagingAreaTags?: array<string, string>|null,
     *     tags?: array<string, string>|null,
     *     useDedicatedReplicationServer?: bool|null,
     *     useFipsEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
