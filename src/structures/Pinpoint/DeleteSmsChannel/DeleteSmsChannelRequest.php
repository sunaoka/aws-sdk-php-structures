<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSmsChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class DeleteSmsChannelRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
