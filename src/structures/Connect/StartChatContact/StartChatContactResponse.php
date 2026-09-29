<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContactId
 * @property string|null $ParticipantId
 * @property string|null $ParticipantToken
 * @property string|null $ContinuedFromContactId
 * @property Shapes\ConnectionCredentials|null $ConnectionCredentials
 * @property Shapes\Websocket|null $Websocket
 * @property string|null $StreamingId
 */
class StartChatContactResponse extends Response
{
}
