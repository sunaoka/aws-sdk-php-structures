<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $AttachedChannels
 * @property list<InputDestination>|null $Destinations
 * @property string|null $Id
 * @property 'STANDARD'|'SINGLE_PIPELINE'|null $InputClass
 * @property list<InputDeviceSettings>|null $InputDevices
 * @property list<string>|null $InputPartnerIds
 * @property 'STATIC'|'DYNAMIC'|null $InputSourceType
 * @property list<MediaConnectFlow>|null $MediaConnectFlows
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property list<string>|null $SecurityGroups
 * @property list<InputSource>|null $Sources
 * @property 'CREATING'|'DETACHED'|'ATTACHED'|'DELETING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 * @property 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST'|'SMPTE_2110_RECEIVER_GROUP'|'SDI'|'MEDIACONNECT_ROUTER'|'SRT_LISTENER'|null $Type
 * @property SrtSettings|null $SrtSettings
 * @property 'AWS'|'ON_PREMISES'|null $InputNetworkLocation
 * @property MulticastSettings|null $MulticastSettings
 * @property Smpte2110ReceiverGroupSettings|null $Smpte2110ReceiverGroupSettings
 * @property list<string>|null $SdiSources
 * @property RouterInputSettings|null $RouterSettings
 */
class Input extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AttachedChannels?: list<string>|null,
     *     Destinations?: list<InputDestination>|null,
     *     Id?: string|null,
     *     InputClass?: 'STANDARD'|'SINGLE_PIPELINE'|null,
     *     InputDevices?: list<InputDeviceSettings>|null,
     *     InputPartnerIds?: list<string>|null,
     *     InputSourceType?: 'STATIC'|'DYNAMIC'|null,
     *     MediaConnectFlows?: list<MediaConnectFlow>|null,
     *     Name?: string|null,
     *     RoleArn?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     Sources?: list<InputSource>|null,
     *     State?: 'CREATING'|'DETACHED'|'ATTACHED'|'DELETING'|'DELETED'|null,
     *     Tags?: array<string, string>|null,
     *     Type?: 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST'|'SMPTE_2110_RECEIVER_GROUP'|'SDI'|'MEDIACONNECT_ROUTER'|'SRT_LISTENER'|null,
     *     SrtSettings?: SrtSettings|null,
     *     InputNetworkLocation?: 'AWS'|'ON_PREMISES'|null,
     *     MulticastSettings?: MulticastSettings|null,
     *     Smpte2110ReceiverGroupSettings?: Smpte2110ReceiverGroupSettings|null,
     *     SdiSources?: list<string>|null,
     *     RouterSettings?: RouterInputSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
