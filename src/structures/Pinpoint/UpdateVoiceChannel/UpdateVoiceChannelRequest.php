<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\VoiceChannelRequest $VoiceChannelRequest
 */
class UpdateVoiceChannelRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     VoiceChannelRequest: Shapes\VoiceChannelRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
