<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannelGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelGroupName
 * @property string $Arn
 * @property string $EgressDomain
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string|null $Description
 * @property string|null $ETag
 * @property array<string, string>|null $Tags
 */
class GetChannelGroupResponse extends Response
{
}
