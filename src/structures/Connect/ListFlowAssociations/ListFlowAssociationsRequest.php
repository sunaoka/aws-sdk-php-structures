<?php

namespace Sunaoka\Aws\Structures\Connect\ListFlowAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|null $ResourceType
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListFlowAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceType?: 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
