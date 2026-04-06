<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FromEmailAddress
 * @property string|null $FromEmailAddressIdentityArn
 * @property Shapes\Destination|null $Destination
 * @property list<string>|null $ReplyToAddresses
 * @property string|null $FeedbackForwardingEmailAddress
 * @property string|null $FeedbackForwardingEmailAddressIdentityArn
 * @property Shapes\EmailContent $Content
 * @property list<Shapes\MessageTag>|null $EmailTags
 * @property string|null $ConfigurationSetName
 * @property string|null $EndpointId
 * @property Shapes\ListManagementOptions|null $ListManagementOptions
 */
class SendEmailRequest extends Request
{
    /**
     * @param array{
     *     FromEmailAddress?: string|null,
     *     FromEmailAddressIdentityArn?: string|null,
     *     Destination?: Shapes\Destination|null,
     *     ReplyToAddresses?: list<string>|null,
     *     FeedbackForwardingEmailAddress?: string|null,
     *     FeedbackForwardingEmailAddressIdentityArn?: string|null,
     *     Content: Shapes\EmailContent,
     *     EmailTags?: list<Shapes\MessageTag>|null,
     *     ConfigurationSetName?: string|null,
     *     EndpointId?: string|null,
     *     ListManagementOptions?: Shapes\ListManagementOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
