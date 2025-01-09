<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\EmailAddressInfo $FromEmailAddress
 * @property string $DestinationEmailAddress
 * @property string $Description
 * @property array<string, Shapes\Reference> $References
 * @property string $Name
 * @property Shapes\InboundEmailContent $EmailMessage
 * @property Shapes\InboundAdditionalRecipients $AdditionalRecipients
 * @property list<Shapes\EmailAttachment> $Attachments
 * @property string $ContactFlowId
 * @property string $RelatedContactId
 * @property array<string, string> $Attributes
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 * @property string $ClientToken
 */
class StartEmailContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FromEmailAddress: Shapes\EmailAddressInfo,
     *     DestinationEmailAddress: string,
     *     Description?: string,
     *     References?: array<string, Shapes\Reference>,
     *     Name?: string,
     *     EmailMessage: Shapes\InboundEmailContent,
     *     AdditionalRecipients?: Shapes\InboundAdditionalRecipients,
     *     Attachments?: list<Shapes\EmailAttachment>,
     *     ContactFlowId?: string,
     *     RelatedContactId?: string,
     *     Attributes?: array<string, string>,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
