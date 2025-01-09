<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ResourceId
 * @property string $FlowId
 * @property 'SMS_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|'WHATSAPP_MESSAGING_PHONE_NUMBER' $ResourceType
 */
class AssociateFlowRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceId: string,
     *     FlowId: string,
     *     ResourceType: 'SMS_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|'WHATSAPP_MESSAGING_PHONE_NUMBER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
