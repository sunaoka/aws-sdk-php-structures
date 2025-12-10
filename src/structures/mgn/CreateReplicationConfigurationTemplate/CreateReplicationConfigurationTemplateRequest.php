<?php

namespace Sunaoka\Aws\Structures\mgn\CreateReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stagingAreaSubnetId
 * @property bool $associateDefaultSecurityGroup
 * @property list<string> $replicationServersSecurityGroupsIDs
 * @property string $replicationServerInstanceType
 * @property bool $useDedicatedReplicationServer
 * @property 'GP2'|'ST1'|'GP3' $defaultLargeStagingDiskType
 * @property 'DEFAULT'|'CUSTOM' $ebsEncryption
 * @property string|null $ebsEncryptionKeyArn
 * @property int<0, 10000> $bandwidthThrottling
 * @property 'PRIVATE_IP'|'PUBLIC_IP' $dataPlaneRouting
 * @property bool $createPublicIP
 * @property array<string, string> $stagingAreaTags
 * @property bool|null $useFipsEndpoint
 * @property array<string, string>|null $tags
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class CreateReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     stagingAreaSubnetId: string,
     *     associateDefaultSecurityGroup: bool,
     *     replicationServersSecurityGroupsIDs: list<string>,
     *     replicationServerInstanceType: string,
     *     useDedicatedReplicationServer: bool,
     *     defaultLargeStagingDiskType: 'GP2'|'ST1'|'GP3',
     *     ebsEncryption: 'DEFAULT'|'CUSTOM',
     *     ebsEncryptionKeyArn?: string|null,
     *     bandwidthThrottling: int<0, 10000>,
     *     dataPlaneRouting: 'PRIVATE_IP'|'PUBLIC_IP',
     *     createPublicIP: bool,
     *     stagingAreaTags: array<string, string>,
     *     useFipsEndpoint?: bool|null,
     *     tags?: array<string, string>|null,
     *     internetProtocol?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
