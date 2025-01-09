<?php

namespace Sunaoka\Aws\Structures\Ses\SendEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property Shapes\Destination $Destination
 * @property Shapes\Message $Message
 * @property list<string> $ReplyToAddresses
 * @property string $ReturnPath
 * @property string $SourceArn
 * @property string $ReturnPathArn
 * @property list<Shapes\MessageTag> $Tags
 * @property string $ConfigurationSetName
 */
class SendEmailRequest extends Request
{
    /**
     * @param array{
     *     Source: string,
     *     Destination: Shapes\Destination,
     *     Message: Shapes\Message,
     *     ReplyToAddresses?: list<string>,
     *     ReturnPath?: string,
     *     SourceArn?: string,
     *     ReturnPathArn?: string,
     *     Tags?: list<Shapes\MessageTag>,
     *     ConfigurationSetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
