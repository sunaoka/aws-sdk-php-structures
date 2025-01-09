<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateAdmChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ADMChannelRequest $ADMChannelRequest
 * @property string $ApplicationId
 */
class UpdateAdmChannelRequest extends Request
{
    /**
     * @param array{
     *     ADMChannelRequest: Shapes\ADMChannelRequest,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
