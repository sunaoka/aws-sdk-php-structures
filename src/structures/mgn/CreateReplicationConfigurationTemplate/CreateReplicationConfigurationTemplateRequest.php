<?php

namespace Sunaoka\Aws\Structures\mgn\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associateDefaultSecurityGroup
 * @property int $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'ST1'|'GP3' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM' $ebsEncryption
 * @property string $ebsEncryptionKeyArn
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string> $tags
 * @property bool $useDedicatedReplicationServer
 * @property bool $useFipsEndpoint
 */
class CreateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associateDefaultSecurityGroup: bool,
     *     bandwidthThrottling: int,
     *     createPublicIP: bool,
     *     dataPlaneRouting: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType: 'GP2'|'ST1'|'GP3',
     *     ebsEncryption: 'DEFAULT'|'CUSTOM',
     *     ebsEncryptionKeyArn?: string,
     *     replicationServerInstanceType: string,
     *     replicationServersSecurityGroupsIDs: list<string>,
     *     stagingAreaSubnetId: string,
     *     stagingAreaTags: array<string, string>,
     *     tags?: array<string, string>,
     *     useDedicatedReplicationServer: bool,
     *     useFipsEndpoint?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
