<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Channel
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{Channel: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
