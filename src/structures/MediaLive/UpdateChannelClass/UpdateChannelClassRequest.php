<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'STANDARD'|'SINGLE_PIPELINE' $ChannelClass
 * @property string $ChannelId
 * @property list<Shapes\OutputDestination>|null $Destinations
 */
class UpdateChannelClassRequest extends Request
{
    /**
     * @param array{
     *     ChannelClass: 'STANDARD'|'SINGLE_PIPELINE',
     *     ChannelId: string,
     *     Destinations?: list<Shapes\OutputDestination>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
