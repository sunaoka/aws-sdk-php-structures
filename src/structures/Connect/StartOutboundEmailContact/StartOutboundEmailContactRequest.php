<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property Shapes\EmailAddressInfo $FromEmailAddress
 * @property Shapes\EmailAddressInfo $DestinationEmailAddress
 * @property Shapes\OutboundAdditionalRecipients $AdditionalRecipients
 * @property Shapes\OutboundEmailContent $EmailMessage
 * @property string $ClientToken
 */
class StartOutboundEmailContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     FromEmailAddress?: Shapes\EmailAddressInfo,
     *     DestinationEmailAddress: Shapes\EmailAddressInfo,
     *     AdditionalRecipients?: Shapes\OutboundAdditionalRecipients,
     *     EmailMessage: Shapes\OutboundEmailContent,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
