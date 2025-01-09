<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsVoipSandboxChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\APNSVoipSandboxChannelRequest $APNSVoipSandboxChannelRequest
 * @property string $ApplicationId
 */
class UpdateApnsVoipSandboxChannelRequest extends Request
{
    /**
     * @param array{
     *     APNSVoipSandboxChannelRequest: Shapes\APNSVoipSandboxChannelRequest,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
