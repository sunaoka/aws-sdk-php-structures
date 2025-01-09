<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteChannelPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 */
class DeleteChannelPolicyRequest extends Request
{
    /**
     * @param array{ChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
