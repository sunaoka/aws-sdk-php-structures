<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Channel
 */
class GetChannelRequest extends Request
{
    /**
     * @param array{Channel: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
