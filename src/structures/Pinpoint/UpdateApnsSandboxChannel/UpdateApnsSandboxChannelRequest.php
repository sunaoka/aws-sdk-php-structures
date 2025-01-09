<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsSandboxChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\APNSSandboxChannelRequest $APNSSandboxChannelRequest
 * @property string $ApplicationId
 */
class UpdateApnsSandboxChannelRequest extends Request
{
    /**
     * @param array{
     *     APNSSandboxChannelRequest: Shapes\APNSSandboxChannelRequest,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
