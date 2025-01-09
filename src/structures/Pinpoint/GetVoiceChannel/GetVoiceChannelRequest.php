<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetVoiceChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class GetVoiceChannelRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
