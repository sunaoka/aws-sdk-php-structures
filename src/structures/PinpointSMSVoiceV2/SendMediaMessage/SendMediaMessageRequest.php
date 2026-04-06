<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendMediaMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string $OriginationIdentity
 * @property string|null $MessageBody
 * @property list<string>|null $MediaUrls
 * @property string|null $ConfigurationSetName
 * @property string|null $MaxPrice
 * @property int<5, 259200>|null $TimeToLive
 * @property array<string, string>|null $Context
 * @property bool|null $DryRun
 * @property string|null $ProtectConfigurationId
 * @property bool|null $MessageFeedbackEnabled
 */
class SendMediaMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity: string,
     *     MessageBody?: string|null,
     *     MediaUrls?: list<string>|null,
     *     ConfigurationSetName?: string|null,
     *     MaxPrice?: string|null,
     *     TimeToLive?: int<5, 259200>|null,
     *     Context?: array<string, string>|null,
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
