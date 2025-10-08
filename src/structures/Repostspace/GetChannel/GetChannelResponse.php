<?php

namespace Sunaoka\Aws\Structures\Repostspace\GetChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string $channelId
 * @property string $channelName
 * @property string|null $channelDescription
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property \Aws\Api\DateTimeResult|null $deleteDateTime
 * @property array<string, list<'ASKER'|'EXPERT'|'MODERATOR'|'SUPPORTREQUESTOR'>>|null $channelRoles
 * @property 'CREATED'|'CREATING'|'CREATE_FAILED'|'DELETED'|'DELETING'|'DELETE_FAILED' $channelStatus
 */
class GetChannelResponse extends Response
{
}
