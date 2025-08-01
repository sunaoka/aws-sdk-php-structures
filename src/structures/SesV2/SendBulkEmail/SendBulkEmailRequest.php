<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FromEmailAddress
 * @property string|null $FromEmailAddressIdentityArn
 * @property list<string>|null $ReplyToAddresses
 * @property string|null $FeedbackForwardingEmailAddress
 * @property string|null $FeedbackForwardingEmailAddressIdentityArn
 * @property list<Shapes\MessageTag>|null $DefaultEmailTags
 * @property Shapes\BulkEmailContent $DefaultContent
 * @property list<Shapes\BulkEmailEntry> $BulkEmailEntries
 * @property string|null $ConfigurationSetName
 * @property string|null $EndpointId
 * @property string|null $TenantName
 */
class SendBulkEmailRequest extends Request
{
    /**
     * @param array{
     *     FromEmailAddress?: string|null,
     *     FromEmailAddressIdentityArn?: string|null,
     *     ReplyToAddresses?: list<string>|null,
     *     FeedbackForwardingEmailAddress?: string|null,
     *     FeedbackForwardingEmailAddressIdentityArn?: string|null,
     *     DefaultEmailTags?: list<Shapes\MessageTag>|null,
     *     DefaultContent: Shapes\BulkEmailContent,
     *     BulkEmailEntries: list<Shapes\BulkEmailEntry>,
     *     ConfigurationSetName?: string|null,
     *     EndpointId?: string|null,
     *     TenantName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
