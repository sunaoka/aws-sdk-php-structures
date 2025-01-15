<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string|null $ChimeBearer
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
