<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MD5OfMessageBody
 * @property string|null $MD5OfMessageAttributes
 * @property string|null $MD5OfMessageSystemAttributes
 * @property string|null $MessageId
 * @property string|null $SequenceNumber
 */
class SendMessageResponse extends Response
{
}
