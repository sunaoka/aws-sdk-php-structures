<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelExpirationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChimeBearer
 * @property Shapes\ExpirationSettings $ExpirationSettings
 */
class PutChannelExpirationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChimeBearer?: string,
     *     ExpirationSettings?: Shapes\ExpirationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
