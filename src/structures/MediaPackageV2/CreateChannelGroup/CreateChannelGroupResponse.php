<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannelGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelGroupName
 * @property string $Arn
 * @property string $EgressDomain
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string|null $ETag
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateChannelGroupResponse extends Response
{
}
