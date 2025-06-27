<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $ClientToken
 * @property string|null $RelatedContactId
 * @property array<string, string>|null $Attributes
 * @property array<string, Shapes\Reference>|null $References
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW' $InitiationMethod
 * @property int|null $ExpiryDurationInMinutes
 * @property Shapes\UserInfo|null $UserInfo
 * @property 'CONNECTED_TO_USER'|'COMPLETED'|null $InitiateAs
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, Shapes\SegmentAttributeValue>|null $SegmentAttributes
 * @property string|null $PreviousContactId
 */
class CreateContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     RelatedContactId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     References?: array<string, Shapes\Reference>|null,
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     InitiationMethod: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW',
     *     ExpiryDurationInMinutes?: int|null,
     *     UserInfo?: Shapes\UserInfo|null,
     *     InitiateAs?: 'CONNECTED_TO_USER'|'COMPLETED'|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>|null,
     *     PreviousContactId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
