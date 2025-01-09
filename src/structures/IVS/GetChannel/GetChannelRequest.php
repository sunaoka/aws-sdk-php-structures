<?php

namespace Sunaoka\Aws\Structures\IVS\GetChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetChannelRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
