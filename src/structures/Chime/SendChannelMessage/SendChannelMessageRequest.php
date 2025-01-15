<?php

namespace Sunaoka\Aws\Structures\Chime\SendChannelMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $Content
 * @property 'STANDARD'|'CONTROL' $Type
 * @property 'PERSISTENT'|'NON_PERSISTENT' $Persistence
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property string|null $ChimeBearer
 */
class SendChannelMessageRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Content: string,
     *     Type: 'STANDARD'|'CONTROL',
     *     Persistence: 'PERSISTENT'|'NON_PERSISTENT',
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
