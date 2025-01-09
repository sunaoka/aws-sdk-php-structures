<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\SMSChannelRequest $SMSChannelRequest
 */
class UpdateSmsChannelRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SMSChannelRequest: Shapes\SMSChannelRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
