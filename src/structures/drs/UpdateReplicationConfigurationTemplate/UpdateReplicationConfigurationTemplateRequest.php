<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

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
 * @property list<Shapes\PITPolicyRule>|null $pitPolicy
 * @property bool|null $autoReplicateNewDisks
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class UpdateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     replicationConfigurationTemplateID: string,
     *     arn?: string|null,
     *     stagingAreaSubnetId?: string|null,
     *     associateDefaultSecurityGroup?: bool|null,
     *     replicationServersSecurityGroupsIDs?: list<string>|null,
     *     replicationServerInstanceType?: string|null,
     *     useDedicatedReplicationServer?: bool|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'GP3'|'ST1'|'AUTO'|null,
     *     ebsEncryption?: 'DEFAULT'|'CUSTOM'|'NONE'|null,
     *     ebsEncryptionKeyArn?: string|null,
     *     bandwidthThrottling?: int<0, max>|null,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     createPublicIP?: bool|null,
     *     stagingAreaTags?: array<string, string>|null,
     *     pitPolicy?: list<Shapes\PITPolicyRule>|null,
     *     autoReplicateNewDisks?: bool|null,
     *     internetProtocol?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
