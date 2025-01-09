<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeReplicationConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class ReplicationConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     associateDefaultSecurityGroup?: bool,
     *     bandwidthThrottling?: int<0, 10000>,
     *     createPublicIP?: bool,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType?: 'GP2'|'ST1'|'GP3',
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM',
     *     ebsEncryptionKeyArn?: string,
     *     replicationConfigurationTemplateID: string,
     *     replicationServerInstanceType?: string,
     *     replicationServersSecurityGroupsIDs?: list<string>,
     *     stagingAreaSubnetId?: string,
     *     stagingAreaTags?: array<string, string>,
     *     tags?: array<string, string>,
     *     useDedicatedReplicationServer?: bool,
     *     useFipsEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
