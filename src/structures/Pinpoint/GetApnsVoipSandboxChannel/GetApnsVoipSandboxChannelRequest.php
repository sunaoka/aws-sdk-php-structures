<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApnsVoipSandboxChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class GetApnsVoipSandboxChannelRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
