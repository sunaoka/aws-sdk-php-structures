<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\EmailAddressInfo $FromEmailAddress
 * @property string $DestinationEmailAddress
 * @property string|null $Description
 * @property array<string, Shapes\Reference>|null $References
 * @property string|null $Name
 * @property Shapes\InboundEmailContent $EmailMessage
 * @property Shapes\InboundAdditionalRecipients|null $AdditionalRecipients
 * @property list<Shapes\EmailAttachment>|null $Attachments
 * @property string|null $ContactFlowId
 * @property string|null $RelatedContactId
 * @property array<string, string>|null $Attributes
 * @property array<string, Shapes\SegmentAttributeValue>|null $SegmentAttributes
 * @property string|null $ClientToken
 */
class StartEmailContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FromEmailAddress: Shapes\EmailAddressInfo,
     *     DestinationEmailAddress: string,
     *     Description?: string|null,
     *     References?: array<string, Shapes\Reference>|null,
     *     Name?: string|null,
     *     EmailMessage: Shapes\InboundEmailContent,
     *     AdditionalRecipients?: Shapes\InboundAdditionalRecipients|null,
     *     Attachments?: list<Shapes\EmailAttachment>|null,
     *     ContactFlowId?: string|null,
     *     RelatedContactId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
