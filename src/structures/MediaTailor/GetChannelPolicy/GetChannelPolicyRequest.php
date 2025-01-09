<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 */
class GetChannelPolicyRequest extends Request
{
    /**
     * @param array{ChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
