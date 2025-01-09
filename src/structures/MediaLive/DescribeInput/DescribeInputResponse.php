<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $AttachedChannels
 * @property list<Shapes\InputDestination> $Destinations
 * @property string $Id
 * @property 'STANDARD'|'SINGLE_PIPELINE' $InputClass
 * @property list<Shapes\InputDeviceSettings> $InputDevices
 * @property list<string> $InputPartnerIds
 * @property 'STATIC'|'DYNAMIC' $InputSourceType
 * @property list<Shapes\MediaConnectFlow> $MediaConnectFlows
 * @property string $Name
 * @property string $RoleArn
 * @property list<string> $SecurityGroups
 * @property list<Shapes\InputSource> $Sources
 * @property 'CREATING'|'DETACHED'|'ATTACHED'|'DELETING'|'DELETED' $State
 * @property array<string, string> $Tags
 * @property 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|'SRT_CALLER'|'MULTICAST' $Type
 * @property Shapes\SrtSettings $SrtSettings
 * @property 'AWS'|'ON_PREMISES' $InputNetworkLocation
 * @property Shapes\MulticastSettings $MulticastSettings
 */
class DescribeInputResponse extends Response
{
}
