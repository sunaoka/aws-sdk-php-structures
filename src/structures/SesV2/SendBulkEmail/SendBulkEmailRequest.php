<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FromEmailAddress
 * @property string $FromEmailAddressIdentityArn
 * @property list<string> $ReplyToAddresses
 * @property string $FeedbackForwardingEmailAddress
 * @property string $FeedbackForwardingEmailAddressIdentityArn
 * @property list<Shapes\MessageTag> $DefaultEmailTags
 * @property Shapes\BulkEmailContent $DefaultContent
 * @property list<Shapes\BulkEmailEntry> $BulkEmailEntries
 * @property string $ConfigurationSetName
 * @property string $EndpointId
 */
class SendBulkEmailRequest extends Request
{
    /**
     * @param array{
     *     FromEmailAddress?: string,
     *     FromEmailAddressIdentityArn?: string,
     *     ReplyToAddresses?: list<string>,
     *     FeedbackForwardingEmailAddress?: string,
     *     FeedbackForwardingEmailAddressIdentityArn?: string,
     *     DefaultEmailTags?: list<Shapes\MessageTag>,
     *     DefaultContent: Shapes\BulkEmailContent,
     *     BulkEmailEntries: list<Shapes\BulkEmailEntry>,
     *     ConfigurationSetName?: string,
     *     EndpointId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
