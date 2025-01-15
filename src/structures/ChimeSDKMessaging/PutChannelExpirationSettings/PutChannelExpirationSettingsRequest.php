<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelExpirationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string|null $ChimeBearer
 * @property Shapes\ExpirationSettings|null $ExpirationSettings
 */
class PutChannelExpirationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChimeBearer?: string|null,
     *     ExpirationSettings?: Shapes\ExpirationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
