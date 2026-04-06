<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteChannelModerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChannelModeratorArn
 * @property string|null $ChimeBearer
 */
class DeleteChannelModeratorRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChannelModeratorArn: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
