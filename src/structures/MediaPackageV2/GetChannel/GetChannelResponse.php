<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $ChannelName
 * @property string $ChannelGroupName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property \Aws\Api\DateTimeResult|null $ResetAt
 * @property string|null $Description
 * @property list<Shapes\IngestEndpoint>|null $IngestEndpoints
 * @property 'HLS'|'CMAF'|null $InputType
 * @property string|null $ETag
 * @property array<string, string>|null $Tags
 * @property Shapes\InputSwitchConfiguration|null $InputSwitchConfiguration
 * @property Shapes\OutputHeaderConfiguration|null $OutputHeaderConfiguration
 */
class GetChannelResponse extends Response
{
}
