<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ClientToken
 * @property string $RelatedContactId
 * @property array<string, string> $Attributes
 * @property array<string, Shapes\Reference> $References
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW' $InitiationMethod
 * @property int $ExpiryDurationInMinutes
 * @property Shapes\UserInfo $UserInfo
 * @property 'CONNECTED_TO_USER' $InitiateAs
 * @property string $Name
 * @property string $Description
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 */
class CreateContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string,
     *     RelatedContactId?: string,
     *     Attributes?: array<string, string>,
     *     References?: array<string, Shapes\Reference>,
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     InitiationMethod: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW',
     *     ExpiryDurationInMinutes?: int,
     *     UserInfo?: Shapes\UserInfo,
     *     InitiateAs?: 'CONNECTED_TO_USER',
     *     Name?: string,
     *     Description?: string,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
