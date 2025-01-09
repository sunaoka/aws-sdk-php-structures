<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $AttachedChannels
 * @property list<InputDestination> $Destinations
 * @property string $Id
 * @property 'STANDARD'|'SINGLE_PIPELINE' $InputClass
 * @property list<InputDeviceSettings> $InputDevices
 * @property list<string> $InputPartnerIds
 * @property 'STATIC'|'DYNAMIC' $InputSourceType
 * @property list<MediaConnectFlow> $MediaConnectFlows
 * @property string $Name
 * @property string $RoleArn
 * @property list<string> $SecurityGroups
 * @property list<InputSource> $Sources
 * @property 'CREATING'|'DETACHED'|'ATTACHED'|'DELETING'|'DELETED' $State
 * @property array<string, string> $Tags
 * @property 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST' $Type
 * @property SrtSettings $SrtSettings
 * @property 'AWS'|'ON_PREMISES' $InputNetworkLocation
 * @property MulticastSettings $MulticastSettings
 */
class Input extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AttachedChannels?: list<string>,
     *     Destinations?: list<InputDestination>,
     *     Id?: string,
     *     InputClass?: 'STANDARD'|'SINGLE_PIPELINE',
     *     InputDevices?: list<InputDeviceSettings>,
     *     InputPartnerIds?: list<string>,
     *     InputSourceType?: 'STATIC'|'DYNAMIC',
     *     MediaConnectFlows?: list<MediaConnectFlow>,
     *     Name?: string,
     *     RoleArn?: string,
     *     SecurityGroups?: list<string>,
     *     Sources?: list<InputSource>,
     *     State?: 'CREATING'|'DETACHED'|'ATTACHED'|'DELETING'|'DELETED',
     *     Tags?: array<string, string>,
     *     Type?: 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST',
     *     SrtSettings?: SrtSettings,
     *     InputNetworkLocation?: 'AWS'|'ON_PREMISES',
     *     MulticastSettings?: MulticastSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
