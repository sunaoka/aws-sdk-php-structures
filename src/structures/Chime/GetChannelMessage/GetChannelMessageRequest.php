<?php

namespace Sunaoka\Aws\Structures\Chime\GetChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string|null $ChimeBearer
 */
class GetChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
