<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApnsVoipChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class DeleteApnsVoipChannelRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
