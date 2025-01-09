<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property bool $associateDefaultSecurityGroup
 * @property int $bandwidthThrottling
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
 * @property bool $useDedicatedReplicationServer
 * @property bool $useFipsEndpoint
 */
class UpdateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     arn?: string,
     *     associateDefaultSecurityGroup?: bool,
     *     bandwidthThrottling?: int,
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
     *     useDedicatedReplicationServer?: bool,
     *     useFipsEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
