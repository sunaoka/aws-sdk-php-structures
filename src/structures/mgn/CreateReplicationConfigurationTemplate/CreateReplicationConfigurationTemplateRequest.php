<?php

namespace Sunaoka\Aws\Structures\mgn\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associateDefaultSecurityGroup
 * @property int<0, 10000> $bandwidthThrottling
 * @property bool $createPublicIP
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property 'GP2'|'ST1'|'GP3' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM' $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property string $replicationServerInstanceType
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $stagingAreaSubnetId
 * @property array<string, string> $stagingAreaTags
 * @property array<string, string>|null $tags
 * @property bool $useDedicatedReplicationServer
 * @property bool|null $useFipsEndpoint
 */
class CreateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associateDefaultSecurityGroup: bool,
     *     bandwidthThrottling: int<0, 10000>,
     *     createPublicIP: bool,
     *     dataPlaneRouting: 'PRIVATE_IP'|'PUBLIC_IP',
     *     defaultLargeStagingDiskType: 'GP2'|'ST1'|'GP3',
     *     ebsEncryption: 'DEFAULT'|'CUSTOM',
     *     ebsEncryptionKeyArn?: string|null,
     *     replicationServerInstanceType: string,
     *     replicationServersSecurityGroupsIDs: list<string>,
     *     stagingAreaSubnetId: string,
     *     stagingAreaTags: array<string, string>,
     *     tags?: array<string, string>|null,
     *     useDedicatedReplicationServer: bool,
     *     useFipsEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
