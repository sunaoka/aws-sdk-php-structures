<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendMediaMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string $OriginationIdentity
 * @property string $MessageBody
 * @property list<string> $MediaUrls
 * @property string $ConfigurationSetName
 * @property string $MaxPrice
 * @property int $TimeToLive
 * @property array<string, string> $Context
 * @property bool $DryRun
 * @property string $ProtectConfigurationId
 * @property bool $MessageFeedbackEnabled
 */
class SendMediaMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity: string,
     *     MessageBody?: string,
     *     MediaUrls?: list<string>,
     *     ConfigurationSetName?: string,
     *     MaxPrice?: string,
     *     TimeToLive?: int,
     *     Context?: array<string, string>,
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
