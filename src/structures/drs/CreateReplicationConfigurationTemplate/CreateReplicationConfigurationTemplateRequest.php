<?php

namespace Sunaoka\Aws\Structures\drs\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associateDefaultSecurityGroup
 * @property bool $autoReplicateNewDisks
 * @property int $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'GP3'|'ST1'|'AUTO' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM'|'NONE' $ebsEncryption
 * @property string $ebsEncryptionKeyArn
 * @property list<Shapes\PITPolicyRule> $pitPolicy
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string> $tags
 * @property bool $useDedicatedReplicationServer
 */
class CreateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associateDefaultSecurityGroup: bool,
     *     autoReplicateNewDisks?: bool,
     *     bandwidthThrottling: int,
     *     createPublicIP: bool,
     *     dataPlaneRouting: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType: 'GP2'|'GP3'|'ST1'|'AUTO',
     *     ebsEncryption: 'DEFAULT'|'CUSTOM'|'NONE',
     *     ebsEncryptionKeyArn?: string,
     *     pitPolicy: list<Shapes\PITPolicyRule>,
     *     replicationServerInstanceType: string,
     *     replicationServersSecurityGroupsIDs: list<string>,
     *     stagingAreaSubnetId: string,
     *     stagingAreaTags: array<string, string>,
     *     tags?: array<string, string>,
     *     useDedicatedReplicationServer: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
