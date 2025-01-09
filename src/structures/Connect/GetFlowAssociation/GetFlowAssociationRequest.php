<?php

namespace Sunaoka\Aws\Structures\Connect\GetFlowAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ResourceId
 * @property 'SMS_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|'WHATSAPP_MESSAGING_PHONE_NUMBER' $ResourceType
 */
class GetFlowAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceId: string,
     *     ResourceType: 'SMS_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|'WHATSAPP_MESSAGING_PHONE_NUMBER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
