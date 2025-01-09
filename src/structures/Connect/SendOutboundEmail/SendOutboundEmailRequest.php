<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\EmailAddressInfo $FromEmailAddress
 * @property Shapes\EmailAddressInfo $DestinationEmailAddress
 * @property Shapes\OutboundAdditionalRecipients $AdditionalRecipients
 * @property Shapes\OutboundEmailContent $EmailMessage
 * @property 'GENERAL'|'CAMPAIGN' $TrafficType
 * @property Shapes\SourceCampaign $SourceCampaign
 * @property string $ClientToken
 */
class SendOutboundEmailRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FromEmailAddress: Shapes\EmailAddressInfo,
     *     DestinationEmailAddress: Shapes\EmailAddressInfo,
     *     AdditionalRecipients?: Shapes\OutboundAdditionalRecipients,
     *     EmailMessage: Shapes\OutboundEmailContent,
     *     TrafficType: 'GENERAL'|'CAMPAIGN',
     *     SourceCampaign?: Shapes\SourceCampaign,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
