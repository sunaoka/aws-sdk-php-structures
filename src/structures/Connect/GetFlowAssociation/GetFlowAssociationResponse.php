<?php

namespace Sunaoka\Aws\Structures\Connect\GetFlowAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceId
 * @property string|null $FlowId
 * @property 'SMS_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|'WHATSAPP_MESSAGING_PHONE_NUMBER'|null $ResourceType
 */
class GetFlowAssociationResponse extends Response
{
}
