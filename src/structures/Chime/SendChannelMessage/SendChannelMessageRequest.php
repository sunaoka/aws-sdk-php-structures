<?php

namespace Sunaoka\Aws\Structures\Chime\SendChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $Content
 * @property 'STANDARD'|'CONTROL' $Type
 * @property 'PERSISTENT'|'NON_PERSISTENT' $Persistence
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property string $ChimeBearer
 */
class SendChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Content: string,
     *     Type: 'STANDARD'|'CONTROL',
     *     Persistence: 'PERSISTENT'|'NON_PERSISTENT',
     *     Metadata?: string,
     *     ClientRequestToken: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
