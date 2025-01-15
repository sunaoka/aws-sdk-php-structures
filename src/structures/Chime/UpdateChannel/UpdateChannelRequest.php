<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $Name
 * @property 'UNRESTRICTED'|'RESTRICTED' $Mode
 * @property string|null $Metadata
 * @property string|null $ChimeBearer
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Name: string,
     *     Mode: 'UNRESTRICTED'|'RESTRICTED',
     *     Metadata?: string|null,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
