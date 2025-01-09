<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $Name
 * @property 'UNRESTRICTED'|'RESTRICTED' $Mode
 * @property string $Metadata
 * @property string $ChimeBearer
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Name?: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED',
     *     Metadata?: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
