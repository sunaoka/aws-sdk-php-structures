<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsVoipChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\APNSVoipChannelRequest $APNSVoipChannelRequest
 * @property string $ApplicationId
 */
class UpdateApnsVoipChannelRequest extends Request
{
    /**
     * @param array{
     *     APNSVoipChannelRequest: Shapes\APNSVoipChannelRequest,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
