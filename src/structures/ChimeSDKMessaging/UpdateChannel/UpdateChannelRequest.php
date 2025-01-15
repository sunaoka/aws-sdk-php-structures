<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string|null $Name
 * @property 'UNRESTRICTED'|'RESTRICTED'|null $Mode
 * @property string|null $Metadata
 * @property string $ChimeBearer
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Name?: string|null,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED'|null,
     *     Metadata?: string|null,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
