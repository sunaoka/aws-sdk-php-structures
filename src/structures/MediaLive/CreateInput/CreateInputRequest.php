<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InputDestinationRequest>|null $Destinations
 * @property list<Shapes\InputDeviceSettings>|null $InputDevices
 * @property list<string>|null $InputSecurityGroups
 * @property list<Shapes\MediaConnectFlowRequest>|null $MediaConnectFlows
 * @property string|null $Name
 * @property string|null $RequestId
 * @property string|null $RoleArn
 * @property list<Shapes\InputSourceRequest>|null $Sources
 * @property array<string, string>|null $Tags
 * @property 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST'|'SMPTE_2110_RECEIVER_GROUP'|null $Type
 * @property Shapes\InputVpcRequest|null $Vpc
 * @property Shapes\SrtSettingsRequest|null $SrtSettings
 * @property 'AWS'|'ON_PREMISES'|null $InputNetworkLocation
 * @property Shapes\MulticastSettingsCreateRequest|null $MulticastSettings
 * @property Shapes\Smpte2110ReceiverGroupSettings|null $Smpte2110ReceiverGroupSettings
 */
class CreateInputRequest extends Request
{
    /**
     * @param array{
     *     Destinations?: list<Shapes\InputDestinationRequest>|null,
     *     InputDevices?: list<Shapes\InputDeviceSettings>|null,
     *     InputSecurityGroups?: list<string>|null,
     *     MediaConnectFlows?: list<Shapes\MediaConnectFlowRequest>|null,
     *     Name?: string|null,
     *     RequestId?: string|null,
     *     RoleArn?: string|null,
     *     Sources?: list<Shapes\InputSourceRequest>|null,
     *     Tags?: array<string, string>|null,
     *     Type?: 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST'|'SMPTE_2110_RECEIVER_GROUP'|null,
     *     Vpc?: Shapes\InputVpcRequest|null,
     *     SrtSettings?: Shapes\SrtSettingsRequest|null,
     *     InputNetworkLocation?: 'AWS'|'ON_PREMISES'|null,
     *     MulticastSettings?: Shapes\MulticastSettingsCreateRequest|null,
     *     Smpte2110ReceiverGroupSettings?: Shapes\Smpte2110ReceiverGroupSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
