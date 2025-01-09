<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetFlowAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string> $ResourceIds
 * @property 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR' $ResourceType
 */
class BatchGetFlowAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceIds: list<string>,
     *     ResourceType?: 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
