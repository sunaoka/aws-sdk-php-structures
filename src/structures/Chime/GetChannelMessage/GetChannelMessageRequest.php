<?php

namespace Sunaoka\Aws\Structures\Chime\GetChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $ChimeBearer
 */
class GetChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
