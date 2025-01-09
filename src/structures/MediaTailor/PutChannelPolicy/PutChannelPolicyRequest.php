<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutChannelPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property string $Policy
 */
class PutChannelPolicyRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
