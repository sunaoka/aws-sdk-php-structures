<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\SendEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FromEmailAddress
 * @property Shapes\Destination $Destination
 * @property list<string> $ReplyToAddresses
 * @property string $FeedbackForwardingEmailAddress
 * @property Shapes\EmailContent $Content
 * @property list<Shapes\MessageTag> $EmailTags
 * @property string $ConfigurationSetName
 */
class SendEmailRequest extends Request
{
    /**
     * @param array{
     *     FromEmailAddress?: string,
     *     Destination: Shapes\Destination,
     *     ReplyToAddresses?: list<string>,
     *     FeedbackForwardingEmailAddress?: string,
     *     Content: Shapes\EmailContent,
     *     EmailTags?: list<Shapes\MessageTag>,
     *     ConfigurationSetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
