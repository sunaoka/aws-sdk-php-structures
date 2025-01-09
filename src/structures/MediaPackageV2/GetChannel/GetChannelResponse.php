<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $ChannelName
 * @property string $ChannelGroupName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $Description
 * @property list<Shapes\IngestEndpoint> $IngestEndpoints
 * @property 'HLS'|'CMAF' $InputType
 * @property string $ETag
 * @property array<string, string> $Tags
 * @property Shapes\InputSwitchConfiguration $InputSwitchConfiguration
 * @property Shapes\OutputHeaderConfiguration $OutputHeaderConfiguration
 */
class GetChannelResponse extends Response
{
}
