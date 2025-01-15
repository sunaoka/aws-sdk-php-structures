<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\SendEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FromEmailAddress
 * @property Shapes\Destination $Destination
 * @property list<string>|null $ReplyToAddresses
 * @property string|null $FeedbackForwardingEmailAddress
 * @property Shapes\EmailContent $Content
 * @property list<Shapes\MessageTag>|null $EmailTags
 * @property string|null $ConfigurationSetName
 */
class SendEmailRequest extends Request
{
    /**
     * @param array{
     *     FromEmailAddress?: string|null,
     *     Destination: Shapes\Destination,
     *     ReplyToAddresses?: list<string>|null,
     *     FeedbackForwardingEmailAddress?: string|null,
     *     Content: Shapes\EmailContent,
     *     EmailTags?: list<Shapes\MessageTag>|null,
     *     ConfigurationSetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
