<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendNotifyTextMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotifyConfigurationId
 * @property string $DestinationPhoneNumber
 * @property string|null $TemplateId
 * @property array<string, string> $TemplateVariables
 * @property int<5, 259200>|null $TimeToLive
 * @property array<string, string>|null $Context
 * @property string|null $ConfigurationSetName
 * @property bool|null $DryRun
 * @property bool|null $MessageFeedbackEnabled
 */
class SendNotifyTextMessageRequest extends Request
{
    /**
     * @param array{
     *     NotifyConfigurationId: string,
     *     DestinationPhoneNumber: string,
     *     TemplateId?: string|null,
     *     TemplateVariables: array<string, string>,
     *     TimeToLive?: int<5, 259200>|null,
     *     Context?: array<string, string>|null,
     *     ConfigurationSetName?: string|null,
     *     DryRun?: bool|null,
     *     MessageFeedbackEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
