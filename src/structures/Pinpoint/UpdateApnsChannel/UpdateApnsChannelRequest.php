<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\APNSChannelRequest $APNSChannelRequest
 * @property string $ApplicationId
 */
class UpdateApnsChannelRequest extends Request
{
    /**
     * @param array{
     *     APNSChannelRequest: Shapes\APNSChannelRequest,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
