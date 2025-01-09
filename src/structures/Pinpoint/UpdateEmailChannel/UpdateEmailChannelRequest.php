<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\EmailChannelRequest $EmailChannelRequest
 */
class UpdateEmailChannelRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EmailChannelRequest: Shapes\EmailChannelRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
