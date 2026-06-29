<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string $OriginationIdentity
 * @property Shapes\RcsMessageContent|null $RcsMessageContent
 * @property int<1, 172800>|null $TimeToLive
 * @property string|null $MessageTrafficType
 * @property Shapes\RcsFallbackConfiguration|null $FallbackConfiguration
 * @property string|null $ProtectConfigurationId
 * @property string|null $ConfigurationSetName
 * @property string|null $MaxPrice
 * @property bool|null $DryRun
 * @property array<string, string>|null $Context
 * @property bool|null $MessageFeedbackEnabled
 */
class SendRcsMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity: string,
     *     RcsMessageContent?: Shapes\RcsMessageContent|null,
     *     TimeToLive?: int<1, 172800>|null,
     *     MessageTrafficType?: string|null,
     *     FallbackConfiguration?: Shapes\RcsFallbackConfiguration|null,
     *     ProtectConfigurationId?: string|null,
     *     ConfigurationSetName?: string|null,
     *     MaxPrice?: string|null,
     *     DryRun?: bool|null,
     *     Context?: array<string, string>|null,
     *     MessageFeedbackEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
