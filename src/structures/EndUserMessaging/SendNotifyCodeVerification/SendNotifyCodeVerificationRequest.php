<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\SendNotifyCodeVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TEXT'|'VOICE'|'WHATSAPP' $channel
 * @property string $destinationIdentity
 * @property string $originationIdentity
 * @property string|null $notifyCodeConfiguration
 * @property Shapes\ChannelParameters|null $overrideChannelParameters
 * @property Shapes\CodeConfigurationParameters|null $overrideCodeConfigurationParameters
 * @property string|null $configurationSetName
 * @property array<string, string>|null $context
 * @property string|null $referenceId
 */
class SendNotifyCodeVerificationRequest extends Request
{
    /**
     * @param array{
     *     channel: 'TEXT'|'VOICE'|'WHATSAPP',
     *     destinationIdentity: string,
     *     originationIdentity: string,
     *     notifyCodeConfiguration?: string|null,
     *     overrideChannelParameters?: Shapes\ChannelParameters|null,
     *     overrideCodeConfigurationParameters?: Shapes\CodeConfigurationParameters|null,
     *     configurationSetName?: string|null,
     *     context?: array<string, string>|null,
     *     referenceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
