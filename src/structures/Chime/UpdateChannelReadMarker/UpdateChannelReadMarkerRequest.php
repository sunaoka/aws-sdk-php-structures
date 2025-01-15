<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateChannelReadMarker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string|null $ChimeBearer
 */
class UpdateChannelReadMarkerRequest extends Request
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
