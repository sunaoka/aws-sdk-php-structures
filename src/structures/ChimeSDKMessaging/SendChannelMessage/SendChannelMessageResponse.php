<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SendChannelMessage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $MessageId
 * @property Shapes\ChannelMessageStatusStructure|null $Status
 * @property string|null $SubChannelId
 */
class SendChannelMessageResponse extends Response
{
}
