<?php

namespace Sunaoka\Aws\Structures\Chime\CreateChannelBan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property string $ChimeBearer
 */
class CreateChannelBanRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MemberArn: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
