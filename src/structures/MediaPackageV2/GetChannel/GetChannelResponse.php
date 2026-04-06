<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $ChannelName
 * @property string $ChannelGroupName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string|null $Description
 * @property list<Shapes\IngestEndpoint>|null $IngestEndpoints
 * @property array<string, string>|null $Tags
 */
class GetChannelResponse extends Response
{
}
