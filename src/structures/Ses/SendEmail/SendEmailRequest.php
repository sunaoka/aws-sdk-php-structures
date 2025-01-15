<?php

namespace Sunaoka\Aws\Structures\Ses\SendEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property Shapes\Destination $Destination
 * @property Shapes\Message $Message
 * @property list<string>|null $ReplyToAddresses
 * @property string|null $ReturnPath
 * @property string|null $SourceArn
 * @property string|null $ReturnPathArn
 * @property list<Shapes\MessageTag>|null $Tags
 * @property string|null $ConfigurationSetName
 */
class SendEmailRequest extends Request
{
    /**
     * @param array{
     *     Source: string,
     *     Destination: Shapes\Destination,
     *     Message: Shapes\Message,
     *     ReplyToAddresses?: list<string>|null,
     *     ReturnPath?: string|null,
     *     SourceArn?: string|null,
     *     ReturnPathArn?: string|null,
     *     Tags?: list<Shapes\MessageTag>|null,
     *     ConfigurationSetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
