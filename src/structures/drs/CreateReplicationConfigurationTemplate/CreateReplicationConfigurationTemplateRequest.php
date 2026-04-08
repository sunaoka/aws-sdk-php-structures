<?php

namespace Sunaoka\Aws\Structures\drs\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stagingAreaSubnetId
 * @property bool|null $associateDefaultSecurityGroup
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string|null $replicationServerInstanceType
 * @property bool|null $useDedicatedReplicationServer
 * @property 'GP2'|'GP3'|'ST1'|'AUTO'|null $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE' $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property int<0, max> $bandwidthThrottling
 * @property 'PRIVATE_IP'|'PUBLIC_IP'|null $dataPlaneRouting
 * @property bool|null $createPublicIP
 * @property array<string, string> $stagingAreaTags
 * @property list<Shapes\PITPolicyRule> $pitPolicy
 * @property array<string, string>|null $tags
 * @property bool|null $autoReplicateNewDisks
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class CreateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     stagingAreaSubnetId: string,
     *     associateDefaultSecurityGroup?: bool|null,
     *     replicationServersSecurityGroupsIDs: list<string>,
     *     replicationServerInstanceType?: string|null,
     *     useDedicatedReplicationServer?: bool|null,
     *     defaultLargeStagingDiskType?: 'GP2'|'GP3'|'ST1'|'AUTO'|null,
     *     ebsEncryption: 'DEFAULT'|'CUSTOM'|'NONE',
     *     ebsEncryptionKeyArn?: string|null,
     *     bandwidthThrottling: int<0, max>,
     *     dataPlaneRouting?: 'PRIVATE_IP'|'PUBLIC_IP'|null,
     *     createPublicIP?: bool|null,
     *     stagingAreaTags: array<string, string>,
     *     pitPolicy: list<Shapes\PITPolicyRule>,
     *     tags?: array<string, string>|null,
     *     autoReplicateNewDisks?: bool|null,
     *     internetProtocol?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
