<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string|null $Content
 * @property string|null $Metadata
 * @property string|null $ChimeBearer
 */
class UpdateChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MessageId: string,
     *     Content?: string|null,
     *     Metadata?: string|null,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
