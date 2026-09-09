<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\MultiviewConfiguration|null $MultiviewConfiguration
 * @property list<string>|null $AttachedMultiviewChannels
 * @property string $Arn
 * @property string $ChannelName
 * @property string $ChannelGroupName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string|null $Description
 * @property list<Shapes\IngestEndpoint>|null $IngestEndpoints
 * @property 'HLS'|'CMAF'|'MULTIVIEW'|null $InputType
 * @property string|null $ETag
 * @property array<string, string>|null $Tags
 * @property Shapes\InputSwitchConfiguration|null $InputSwitchConfiguration
 * @property Shapes\OutputHeaderConfiguration|null $OutputHeaderConfiguration
 * @property 'EPOCH_LOCKED'|'NON_EPOCH_LOCKED'|null $OutputLockingMode
 */
class UpdateChannelResponse extends Response
{
}
