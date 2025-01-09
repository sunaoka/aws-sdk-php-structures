<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InputDestinationRequest> $Destinations
 * @property list<Shapes\InputDeviceSettings> $InputDevices
 * @property list<string> $InputSecurityGroups
 * @property list<Shapes\MediaConnectFlowRequest> $MediaConnectFlows
 * @property string $Name
 * @property string $RequestId
 * @property string $RoleArn
 * @property list<Shapes\InputSourceRequest> $Sources
 * @property array<string, string> $Tags
 * @property 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST' $Type
 * @property Shapes\InputVpcRequest $Vpc
 * @property Shapes\SrtSettingsRequest $SrtSettings
 * @property 'AWS'|'ON_PREMISES' $InputNetworkLocation
 * @property Shapes\MulticastSettingsCreateRequest $MulticastSettings
 */
class CreateInputRequest extends Request
{
    /**
     * @param array{
     *     Destinations?: list<Shapes\InputDestinationRequest>,
     *     InputDevices?: list<Shapes\InputDeviceSettings>,
     *     InputSecurityGroups?: list<string>,
     *     MediaConnectFlows?: list<Shapes\MediaConnectFlowRequest>,
     *     Name?: string,
     *     RequestId?: string,
     *     RoleArn?: string,
     *     Sources?: list<Shapes\InputSourceRequest>,
     *     Tags?: array<string, string>,
     *     Type?: 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST',
     *     Vpc?: Shapes\InputVpcRequest,
     *     SrtSettings?: Shapes\SrtSettingsRequest,
     *     InputNetworkLocation?: 'AWS'|'ON_PREMISES',
     *     MulticastSettings?: Shapes\MulticastSettingsCreateRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
