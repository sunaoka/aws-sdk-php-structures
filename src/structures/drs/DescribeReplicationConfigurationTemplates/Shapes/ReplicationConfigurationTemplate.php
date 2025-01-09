<?php

namespace Sunaoka\Aws\Structures\drs\DescribeReplicationConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property list<PITPolicyRule> $pitPolicy
 * @property string $replicationConfigurationTemplateID
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string> $tags
 * @property bool $useDedicatedReplicationServer
 */
class ReplicationConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     associateDefaultSecurityGroup?: bool,
     *     autoReplicateNewDisks?: bool,
     *     bandwidthThrottling?: int,
     *     createPublicIP?: bool,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType?: 'GP2'|'GP3'|'ST1'|'AUTO',
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|'NONE',
     *     ebsEncryptionKeyArn?: string,
     *     pitPolicy?: list<PITPolicyRule>,
     *     replicationConfigurationTemplateID: string,
     *     replicationServerInstanceType?: string,
     *     replicationServersSecurityGroupsIDs?: list<string>,
     *     stagingAreaSubnetId?: string,
     *     stagingAreaTags?: array<string, string>,
     *     tags?: array<string, string>,
     *     useDedicatedReplicationServer?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
