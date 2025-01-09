<?php

namespace Sunaoka\Aws\Structures\Chime\RedactChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $ChimeBearer
 */
class RedactChannelMessageRequest extends Request
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
