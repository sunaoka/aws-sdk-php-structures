<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $Content
 * @property string $Metadata
 * @property string $ChimeBearer
 */
class UpdateChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     Content?: string,
     *     Metadata?: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
