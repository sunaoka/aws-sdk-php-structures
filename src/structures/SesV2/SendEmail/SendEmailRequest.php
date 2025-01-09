<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FromEmailAddress
 * @property string $FromEmailAddressIdentityArn
 * @property Shapes\Destination $Destination
 * @property list<string> $ReplyToAddresses
 * @property string $FeedbackForwardingEmailAddress
 * @property string $FeedbackForwardingEmailAddressIdentityArn
 * @property Shapes\EmailContent $Content
 * @property list<Shapes\MessageTag> $EmailTags
 * @property string $ConfigurationSetName
 * @property string $EndpointId
 * @property Shapes\ListManagementOptions $ListManagementOptions
 */
class SendEmailRequest extends Request
{
    /**
     * @param array{
     *     FromEmailAddress?: string,
     *     FromEmailAddressIdentityArn?: string,
     *     Destination?: Shapes\Destination,
     *     ReplyToAddresses?: list<string>,
     *     FeedbackForwardingEmailAddress?: string,
     *     FeedbackForwardingEmailAddressIdentityArn?: string,
     *     Content: Shapes\EmailContent,
     *     EmailTags?: list<Shapes\MessageTag>,
     *     ConfigurationSetName?: string,
     *     EndpointId?: string,
     *     ListManagementOptions?: Shapes\ListManagementOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
