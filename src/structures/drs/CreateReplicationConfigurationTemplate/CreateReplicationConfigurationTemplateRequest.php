<?php

namespace Sunaoka\Aws\Structures\drs\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associateDefaultSecurityGroup
 * @property bool|null $autoReplicateNewDisks
 * @property int<0, max> $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'GP3'|'ST1'|'AUTO' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE' $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property list<Shapes\PITPolicyRule> $pitPolicy
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string>|null $tags
 * @property bool $useDedicatedReplicationServer
 */
class CreateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associateDefaultSecurityGroup: bool,
     *     autoReplicateNewDisks?: bool|null,
     *     bandwidthThrottling: int<0, max>,
     *     createPublicIP: bool,
     *     dataPlaneRouting: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType: 'GP2'|'GP3'|'ST1'|'AUTO',
     *     ebsEncryption: 'DEFAULT'|'CUSTOM'|'NONE',
     *     ebsEncryptionKeyArn?: string|null,
     *     pitPolicy: list<Shapes\PITPolicyRule>,
     *     replicationServerInstanceType: string,
     *     replicationServersSecurityGroupsIDs: list<string>,
     *     stagingAreaSubnetId: string,
     *     stagingAreaTags: array<string, string>,
     *     tags?: array<string, string>|null,
     *     useDedicatedReplicationServer: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
