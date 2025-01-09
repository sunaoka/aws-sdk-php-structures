<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateGcmChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\GCMChannelRequest $GCMChannelRequest
 */
class UpdateGcmChannelRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     GCMChannelRequest: Shapes\GCMChannelRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
