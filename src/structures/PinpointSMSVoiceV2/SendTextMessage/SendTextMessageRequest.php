<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendTextMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string|null $OriginationIdentity
 * @property string|null $MessageBody
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $MessageType
 * @property string|null $Keyword
 * @property string|null $ConfigurationSetName
 * @property string|null $MaxPrice
 * @property int<5, 259200>|null $TimeToLive
 * @property array<string, string>|null $Context
 * @property array<'IN_TEMPLATE_ID'|'IN_ENTITY_ID', string>|null $DestinationCountryParameters
 * @property bool|null $DryRun
 * @property string|null $ProtectConfigurationId
 * @property bool|null $MessageFeedbackEnabled
 */
class SendTextMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity?: string|null,
     *     MessageBody?: string|null,
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL'|null,
     *     Keyword?: string|null,
     *     ConfigurationSetName?: string|null,
     *     MaxPrice?: string|null,
     *     TimeToLive?: int<5, 259200>|null,
     *     Context?: array<string, string>|null,
     *     DestinationCountryParameters?: array<'IN_TEMPLATE_ID'|'IN_ENTITY_ID', string>|null,
     *     DryRun?: bool|null,
     *     ProtectConfigurationId?: string|null,
     *     MessageFeedbackEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
