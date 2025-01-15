<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property Shapes\EmailAddressInfo|null $FromEmailAddress
 * @property Shapes\EmailAddressInfo $DestinationEmailAddress
 * @property Shapes\OutboundAdditionalRecipients|null $AdditionalRecipients
 * @property Shapes\OutboundEmailContent $EmailMessage
 * @property string|null $ClientToken
 */
class StartOutboundEmailContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     FromEmailAddress?: Shapes\EmailAddressInfo|null,
     *     DestinationEmailAddress: Shapes\EmailAddressInfo,
     *     AdditionalRecipients?: Shapes\OutboundAdditionalRecipients|null,
     *     EmailMessage: Shapes\OutboundEmailContent,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
