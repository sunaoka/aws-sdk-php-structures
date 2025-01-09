<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendTextMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string $OriginationIdentity
 * @property string $MessageBody
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property string $Keyword
 * @property string $ConfigurationSetName
 * @property string $MaxPrice
 * @property int<5, 259200> $TimeToLive
 * @property array<string, string> $Context
 * @property array<'IN_TEMPLATE_ID'|'IN_ENTITY_ID', string> $DestinationCountryParameters
 * @property bool $DryRun
 * @property string $ProtectConfigurationId
 * @property bool $MessageFeedbackEnabled
 */
class SendTextMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity?: string,
     *     MessageBody?: string,
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     Keyword?: string,
     *     ConfigurationSetName?: string,
     *     MaxPrice?: string,
     *     TimeToLive?: int<5, 259200>,
     *     Context?: array<string, string>,
     *     DestinationCountryParameters?: array<'IN_TEMPLATE_ID'|'IN_ENTITY_ID', string>,
     *     DryRun?: bool,
     *     ProtectConfigurationId?: string,
     *     MessageFeedbackEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
