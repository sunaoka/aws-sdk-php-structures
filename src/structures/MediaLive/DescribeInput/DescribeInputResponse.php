<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $AttachedChannels
 * @property list<Shapes\InputDestination>|null $Destinations
 * @property string|null $Id
 * @property 'STANDARD'|'SINGLE_PIPELINE'|null $InputClass
 * @property list<Shapes\InputDeviceSettings>|null $InputDevices
 * @property list<string>|null $InputPartnerIds
 * @property 'STATIC'|'DYNAMIC'|null $InputSourceType
 * @property list<Shapes\MediaConnectFlow>|null $MediaConnectFlows
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property list<string>|null $SecurityGroups
 * @property list<Shapes\InputSource>|null $Sources
 * @property 'CREATING'|'DETACHED'|'ATTACHED'|'DELETING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 * @property 'UDP_PUSH'|'RTP_PUSH'|'RTMP_PUSH'|'RTMP_PULL'|'URL_PULL'|'MP4_FILE'|'MEDIACONNECT'|'INPUT_DEVICE'|'AWS_CDI'|'TS_FILE'|null $Type
 */
class DescribeInputResponse extends Response
{
}
