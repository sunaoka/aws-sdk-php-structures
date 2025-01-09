<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
